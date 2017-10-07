<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b8859827bcea42ddb3b7c6a041082f75d112ee1ae690a512dcfa4d94559e8bfa extends Twig_Template
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
        $__internal_a2a28f19f2cb25a72a290a5e88177d73f38b100d8fb0e123e14a904e7f74b20a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a28f19f2cb25a72a290a5e88177d73f38b100d8fb0e123e14a904e7f74b20a->enter($__internal_a2a28f19f2cb25a72a290a5e88177d73f38b100d8fb0e123e14a904e7f74b20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_9cf4e435fb22cc1ed01f9fb56f22f11d58c23205fccc9812c6ecff4626c97ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf4e435fb22cc1ed01f9fb56f22f11d58c23205fccc9812c6ecff4626c97ef8->enter($__internal_9cf4e435fb22cc1ed01f9fb56f22f11d58c23205fccc9812c6ecff4626c97ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a2a28f19f2cb25a72a290a5e88177d73f38b100d8fb0e123e14a904e7f74b20a->leave($__internal_a2a28f19f2cb25a72a290a5e88177d73f38b100d8fb0e123e14a904e7f74b20a_prof);

        
        $__internal_9cf4e435fb22cc1ed01f9fb56f22f11d58c23205fccc9812c6ecff4626c97ef8->leave($__internal_9cf4e435fb22cc1ed01f9fb56f22f11d58c23205fccc9812c6ecff4626c97ef8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
