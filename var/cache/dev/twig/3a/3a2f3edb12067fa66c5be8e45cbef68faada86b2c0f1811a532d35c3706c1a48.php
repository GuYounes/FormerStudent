<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fdab36a12fb8f98d31cd5d120632f58f6514d6d4d11649463ea7381faa5250d0 extends Twig_Template
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
        $__internal_b09e26521434f1962b4278f09b71a3a726d622c854344eab4ab5c521b9c7d420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09e26521434f1962b4278f09b71a3a726d622c854344eab4ab5c521b9c7d420->enter($__internal_b09e26521434f1962b4278f09b71a3a726d622c854344eab4ab5c521b9c7d420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1bf20e0ecbb6c32235a247627fbe40c4b15aaa7f83ba69c872918f8a38d3be47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf20e0ecbb6c32235a247627fbe40c4b15aaa7f83ba69c872918f8a38d3be47->enter($__internal_1bf20e0ecbb6c32235a247627fbe40c4b15aaa7f83ba69c872918f8a38d3be47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b09e26521434f1962b4278f09b71a3a726d622c854344eab4ab5c521b9c7d420->leave($__internal_b09e26521434f1962b4278f09b71a3a726d622c854344eab4ab5c521b9c7d420_prof);

        
        $__internal_1bf20e0ecbb6c32235a247627fbe40c4b15aaa7f83ba69c872918f8a38d3be47->leave($__internal_1bf20e0ecbb6c32235a247627fbe40c4b15aaa7f83ba69c872918f8a38d3be47_prof);

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
