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
        $__internal_28cfc9ad98cc60ca483fd58c4efdd0bc36c9492558edd9f8aa09309a22fe58ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28cfc9ad98cc60ca483fd58c4efdd0bc36c9492558edd9f8aa09309a22fe58ec->enter($__internal_28cfc9ad98cc60ca483fd58c4efdd0bc36c9492558edd9f8aa09309a22fe58ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b8dee9414fcca41570e755b533ddc343671343dd0a5be039dc0787240c495e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8dee9414fcca41570e755b533ddc343671343dd0a5be039dc0787240c495e27->enter($__internal_b8dee9414fcca41570e755b533ddc343671343dd0a5be039dc0787240c495e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_28cfc9ad98cc60ca483fd58c4efdd0bc36c9492558edd9f8aa09309a22fe58ec->leave($__internal_28cfc9ad98cc60ca483fd58c4efdd0bc36c9492558edd9f8aa09309a22fe58ec_prof);

        
        $__internal_b8dee9414fcca41570e755b533ddc343671343dd0a5be039dc0787240c495e27->leave($__internal_b8dee9414fcca41570e755b533ddc343671343dd0a5be039dc0787240c495e27_prof);

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
