<ul id="main-nav">  <!-- Accordion Menu -->
    <li>
        <a class="nav-top-item <?php if($this->router->class=="works") echo 'current'; ?>" href="#" style="padding-right: 15px;">
        Trabajos
        </a>
        <ul style="display: none;">
            <?php $attr['class']= $this->router->method=='index' && $this->router->class=="works"?'current':''; ?>
            <li><?=anchor('admin/works','Listar',$attr);?></li>
            <?php $attr['class']= $this->router->method=='create' && $this->router->class=="works"?'current':''; ?>
            <li><?=anchor('admin/works/create','Crear',$attr);?></li>
        </ul>
    </li>
    <li>
        <a class="nav-top-item <?php if($this->router->class=="sections") echo 'current'; ?>" href="#" style="padding-right: 15px;">
        Secciones
        </a>
        <ul style="display: none;">
            <?php $attr['class']= $this->router->method=='index' && $this->router->class=="sections"?'current':''; ?>
            <li><?=anchor('admin/sections','Listar',$attr);?></li>
            <?php $attr['class']= $this->router->method=='create'  && $this->router->class=="sections"?'current':''; ?>
            <li><?=anchor('admin/sections/create','Crear',$attr);?></li>
        </ul>
    </li>
</ul> <!-- End #main-nav -->
</div>
</div>