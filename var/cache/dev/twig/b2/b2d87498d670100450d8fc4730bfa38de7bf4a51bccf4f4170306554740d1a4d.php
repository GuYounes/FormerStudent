<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_97bf44d0e0f494077f53ed4cc461449c59c0fa198502e78f6e3bd832335c9f8c extends Twig_Template
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
        $__internal_bacbbadd456b344694364df6ea394bdf56cd591cd6ab8f7abc6b213b75ebe37e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bacbbadd456b344694364df6ea394bdf56cd591cd6ab8f7abc6b213b75ebe37e->enter($__internal_bacbbadd456b344694364df6ea394bdf56cd591cd6ab8f7abc6b213b75ebe37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1a4be0c8707202d30262bbfd1b91286827873795f561fd1e0a91787833f54910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4be0c8707202d30262bbfd1b91286827873795f561fd1e0a91787833f54910->enter($__internal_1a4be0c8707202d30262bbfd1b91286827873795f561fd1e0a91787833f54910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bacbbadd456b344694364df6ea394bdf56cd591cd6ab8f7abc6b213b75ebe37e->leave($__internal_bacbbadd456b344694364df6ea394bdf56cd591cd6ab8f7abc6b213b75ebe37e_prof);

        
        $__internal_1a4be0c8707202d30262bbfd1b91286827873795f561fd1e0a91787833f54910->leave($__internal_1a4be0c8707202d30262bbfd1b91286827873795f561fd1e0a91787833f54910_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
