<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c8c0d9c81834a2dbb243f2f8d86b791c44d720164efc6992a8a750c8425e2233 extends Twig_Template
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
        $__internal_753c3dbe1c89b2fdc6b56947ffdf54fd8b6abd362f6da1de28ff364f126abaab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753c3dbe1c89b2fdc6b56947ffdf54fd8b6abd362f6da1de28ff364f126abaab->enter($__internal_753c3dbe1c89b2fdc6b56947ffdf54fd8b6abd362f6da1de28ff364f126abaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_799a049fbcce1832da942d3e8ea8e54d5e135d8c4c872f7bc0288c2e22706467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799a049fbcce1832da942d3e8ea8e54d5e135d8c4c872f7bc0288c2e22706467->enter($__internal_799a049fbcce1832da942d3e8ea8e54d5e135d8c4c872f7bc0288c2e22706467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_753c3dbe1c89b2fdc6b56947ffdf54fd8b6abd362f6da1de28ff364f126abaab->leave($__internal_753c3dbe1c89b2fdc6b56947ffdf54fd8b6abd362f6da1de28ff364f126abaab_prof);

        
        $__internal_799a049fbcce1832da942d3e8ea8e54d5e135d8c4c872f7bc0288c2e22706467->leave($__internal_799a049fbcce1832da942d3e8ea8e54d5e135d8c4c872f7bc0288c2e22706467_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
