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
        $__internal_9260d55ce20013891c4a7b7bf5339360062fec1d74d5f101dfa1327176f4a109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9260d55ce20013891c4a7b7bf5339360062fec1d74d5f101dfa1327176f4a109->enter($__internal_9260d55ce20013891c4a7b7bf5339360062fec1d74d5f101dfa1327176f4a109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_fabef67a10dc3c4c3c4ba9b24a347ceeb2224fb94e6d4234c67086770ce389dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fabef67a10dc3c4c3c4ba9b24a347ceeb2224fb94e6d4234c67086770ce389dc->enter($__internal_fabef67a10dc3c4c3c4ba9b24a347ceeb2224fb94e6d4234c67086770ce389dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9260d55ce20013891c4a7b7bf5339360062fec1d74d5f101dfa1327176f4a109->leave($__internal_9260d55ce20013891c4a7b7bf5339360062fec1d74d5f101dfa1327176f4a109_prof);

        
        $__internal_fabef67a10dc3c4c3c4ba9b24a347ceeb2224fb94e6d4234c67086770ce389dc->leave($__internal_fabef67a10dc3c4c3c4ba9b24a347ceeb2224fb94e6d4234c67086770ce389dc_prof);

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
