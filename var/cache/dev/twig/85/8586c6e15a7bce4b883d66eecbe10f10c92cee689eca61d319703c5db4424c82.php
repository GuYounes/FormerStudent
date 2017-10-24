<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9d6c3d0a4cfe4773349ab2578c3b8c06c1fe548fe91ef22c38af05d87a79a79e extends Twig_Template
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
        $__internal_2da75d694f7798ddf155e43b83bbbeb8797f3fe5a45beb2ef90653a04282e6a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da75d694f7798ddf155e43b83bbbeb8797f3fe5a45beb2ef90653a04282e6a3->enter($__internal_2da75d694f7798ddf155e43b83bbbeb8797f3fe5a45beb2ef90653a04282e6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_3fc2c702806e6aeadd1f80c45b030aafba1acde5deb1180543795a345db7da03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc2c702806e6aeadd1f80c45b030aafba1acde5deb1180543795a345db7da03->enter($__internal_3fc2c702806e6aeadd1f80c45b030aafba1acde5deb1180543795a345db7da03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2da75d694f7798ddf155e43b83bbbeb8797f3fe5a45beb2ef90653a04282e6a3->leave($__internal_2da75d694f7798ddf155e43b83bbbeb8797f3fe5a45beb2ef90653a04282e6a3_prof);

        
        $__internal_3fc2c702806e6aeadd1f80c45b030aafba1acde5deb1180543795a345db7da03->leave($__internal_3fc2c702806e6aeadd1f80c45b030aafba1acde5deb1180543795a345db7da03_prof);

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
