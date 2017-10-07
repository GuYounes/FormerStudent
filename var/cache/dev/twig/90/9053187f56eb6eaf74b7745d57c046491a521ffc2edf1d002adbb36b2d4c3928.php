<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_528a6999f1f011d1c834d19514fee0cf1dbd53e9d5b39c3abdea529370d5e1e3 extends Twig_Template
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
        $__internal_b2944ba677ad5c9876c605b7bcd131e08081fba06d1b7153f368f9686d5c46ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2944ba677ad5c9876c605b7bcd131e08081fba06d1b7153f368f9686d5c46ff->enter($__internal_b2944ba677ad5c9876c605b7bcd131e08081fba06d1b7153f368f9686d5c46ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_0d16fea2a0a2b3da699b72df85a95701ec1c94861f8fc4ec0fd08062d5577e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d16fea2a0a2b3da699b72df85a95701ec1c94861f8fc4ec0fd08062d5577e66->enter($__internal_0d16fea2a0a2b3da699b72df85a95701ec1c94861f8fc4ec0fd08062d5577e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b2944ba677ad5c9876c605b7bcd131e08081fba06d1b7153f368f9686d5c46ff->leave($__internal_b2944ba677ad5c9876c605b7bcd131e08081fba06d1b7153f368f9686d5c46ff_prof);

        
        $__internal_0d16fea2a0a2b3da699b72df85a95701ec1c94861f8fc4ec0fd08062d5577e66->leave($__internal_0d16fea2a0a2b3da699b72df85a95701ec1c94861f8fc4ec0fd08062d5577e66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
