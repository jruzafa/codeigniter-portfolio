<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Simplelogin Class
 *
 * Makes authentication simple
 *
 * Simplelogin is released to the public domain
 * (use it however you want to)
 * 
 * Simplelogin expects this database setup
 * (if you are not using this setup you may
 * need to do some tweaking)
 * 

    #This is for a MySQL table
    CREATE TABLE `users` (
    `id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `email` VARCHAR( 64 ) NOT NULL ,
    `password` VARCHAR( 64 ) NOT NULL ,
    UNIQUE (
    `email`
    )
    );

 * 
 */
class Simplelogin
{
    var $CI;
    var $user_table = 'users';

    /**
     * Create a user account
     *
     * @access    public
     * @param    string
     * @param    string
     * @param    bool
     * @return    bool
     */
    function create($email = '', $password = '', $auto_login = true) {
        //Put here for PHP 4 users
        $this->CI =& get_instance(); 
        

        //Make sure account info was sent
        if($email == '' OR $password == '') {
            return false;
        }
        
        //Check against user table
        $this->CI->db->where('email', $email); 

        $query = $this->CI->db->get_where($this->user_table);
        
        if ($query->num_rows() > 0) {
            //email already exists
            
            return false;
            
        } else {
            //Encrypt password
            $password = md5($password);
            
            //Insert account into the database
            $data = array(
                'email' => $email,
                'password' => $password
            );

           $this->CI->db->set($data); 
            
            if(!$this->CI->db->insert($this->user_table)) {
                //There was a problem!
                return false;                        
            }
            $email_id = $this->CI->db->insert_id();
            
            //Automatically login to created account
           /* if($auto_login) {        
                //Destroy old session
                $this->CI->session->sess_destroy();
                
                //Create a fresh, brand new session
                $this->CI->session->sess_create();
                
                //Set session data
                $this->CI->session->set_userdata(array('id' => $email_id,'email' => $email));
                
                //Set logged_in to true
                $this->CI->session->set_userdata(array('logged_in' => true));            
            
            }*/
            
            //Login was successful            
            return true;
        }

    }

    /**
     * Delete user
     *
     * @access    public
     * @param integer
     * @return    bool
     */
    function delete($email_id) {
        //Put here for PHP 4 users
        $this->CI =& get_instance();
        
        if(!is_numeric($email_id)) {
            //There was a problem
            return false;            
        }

        if($this->CI->db->delete($this->user_table, array('id' => $email_id))) {
            //Database call was successful, user is deleted
            return true;
        } else {
            //There was a problem
            return false;
        }
    }


    /**
     * Login and sets session variables
     *
     * @access    public
     * @param    string
     * @param    string
     * @return    bool
     */
    function login($email = '', $password = '') {
        //Put here for PHP 4 users
        $this->CI =& get_instance();        

        //Make sure login info was sent
        if($email == '' OR $password == '') {
            return false;
        }

        //Check if already logged in
        if($this->CI->session->userdata('email') == $email) {
            //User is already logged in.
            return false;
        }
        
        //Check against user table
        $this->CI->db->where('email', $email); 
        $query = $this->CI->db->get_where($this->user_table);
        
        if ($query->num_rows() > 0) {
            $row = $query->row_array(); 
            
            //Check against password
            if(md5($password) != $row['password']) {
                return false;
            }
            
            //Destroy old session
            $this->CI->session->sess_destroy();
            
            //Create a fresh, brand new session
            $this->CI->session->sess_create();
            
            //Remove the password field
            unset($row['password']);
            
            //Set session data
            $this->CI->session->set_userdata($row);
            
            //Set logged_in to true
            $this->CI->session->set_userdata(array('logged_in' => true));            
            
            //Login was successful            
            return true;
        } else {
            //No database result found
            return false;
        }    

    }

    /**
     * Logout user
     *
     * @access    public
     * @return    void
     */
    function logout() {
        //Put here for PHP 4 users
        $this->CI =& get_instance();        

        //Destroy session
        $this->CI->session->sess_destroy();
    }
}
?> 