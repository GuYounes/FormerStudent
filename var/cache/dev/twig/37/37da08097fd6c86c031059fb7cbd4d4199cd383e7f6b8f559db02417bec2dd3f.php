<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_645966f2371a33b5bf08ee826819c6a1fc0ed1382c9ff8f1f894bfd21d2cd8e2 extends Twig_Template
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
        $__internal_65e445994f4dc16b66711b5e98155f1293a9fd2d7ee394e88b8acbdec140572b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e445994f4dc16b66711b5e98155f1293a9fd2d7ee394e88b8acbdec140572b->enter($__internal_65e445994f4dc16b66711b5e98155f1293a9fd2d7ee394e88b8acbdec140572b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_30cfedff2c21147cc183536d48a07146bdae25e7ba590b20b8dd5ca1da352e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30cfedff2c21147cc183536d48a07146bdae25e7ba590b20b8dd5ca1da352e96->enter($__internal_30cfedff2c21147cc183536d48a07146bdae25e7ba590b20b8dd5ca1da352e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_65e445994f4dc16b66711b5e98155f1293a9fd2d7ee394e88b8acbdec140572b->leave($__internal_65e445994f4dc16b66711b5e98155f1293a9fd2d7ee394e88b8acbdec140572b_prof);

        
        $__internal_30cfedff2c21147cc183536d48a07146bdae25e7ba590b20b8dd5ca1da352e96->leave($__internal_30cfedff2c21147cc183536d48a07146bdae25e7ba590b20b8dd5ca1da352e96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
