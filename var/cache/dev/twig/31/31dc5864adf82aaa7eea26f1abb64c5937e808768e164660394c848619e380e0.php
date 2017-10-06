<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bb9da003bda3d5b6804a9c8989117e0400c8e417b51f3bf5151cd96ed04a85b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a6df08e33ff1c2ad91210c499ba0426be1f373deb03c036034b5739e9b3d400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a6df08e33ff1c2ad91210c499ba0426be1f373deb03c036034b5739e9b3d400->enter($__internal_3a6df08e33ff1c2ad91210c499ba0426be1f373deb03c036034b5739e9b3d400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_19c8a79924cd689709598c4867dd95f84d25a807b7357cb6439e4b43fb2c7abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c8a79924cd689709598c4867dd95f84d25a807b7357cb6439e4b43fb2c7abe->enter($__internal_19c8a79924cd689709598c4867dd95f84d25a807b7357cb6439e4b43fb2c7abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3a6df08e33ff1c2ad91210c499ba0426be1f373deb03c036034b5739e9b3d400->leave($__internal_3a6df08e33ff1c2ad91210c499ba0426be1f373deb03c036034b5739e9b3d400_prof);

        
        $__internal_19c8a79924cd689709598c4867dd95f84d25a807b7357cb6439e4b43fb2c7abe->leave($__internal_19c8a79924cd689709598c4867dd95f84d25a807b7357cb6439e4b43fb2c7abe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
