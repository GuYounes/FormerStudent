<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a2df2418a224000d76f940c0f75d9e7088b52c4c99123b7d0ef43813a65a97da extends Twig_Template
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
        $__internal_90d2ad4f80907144594ab0ba2d24ed29097e61a0346ad6e9ab491e8c3a9d4915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d2ad4f80907144594ab0ba2d24ed29097e61a0346ad6e9ab491e8c3a9d4915->enter($__internal_90d2ad4f80907144594ab0ba2d24ed29097e61a0346ad6e9ab491e8c3a9d4915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_ecbc34a10c4251f01b527d26436eaa23ebdceaae60e337040eae33a1a0aba591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbc34a10c4251f01b527d26436eaa23ebdceaae60e337040eae33a1a0aba591->enter($__internal_ecbc34a10c4251f01b527d26436eaa23ebdceaae60e337040eae33a1a0aba591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_90d2ad4f80907144594ab0ba2d24ed29097e61a0346ad6e9ab491e8c3a9d4915->leave($__internal_90d2ad4f80907144594ab0ba2d24ed29097e61a0346ad6e9ab491e8c3a9d4915_prof);

        
        $__internal_ecbc34a10c4251f01b527d26436eaa23ebdceaae60e337040eae33a1a0aba591->leave($__internal_ecbc34a10c4251f01b527d26436eaa23ebdceaae60e337040eae33a1a0aba591_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
