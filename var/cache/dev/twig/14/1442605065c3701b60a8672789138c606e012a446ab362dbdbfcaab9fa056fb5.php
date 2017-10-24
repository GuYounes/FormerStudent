<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4f705559dc3b9e1c4540aa9d0f7beac4df2808bbddef63aaf89a2fabaeef5f78 extends Twig_Template
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
        $__internal_8fec91c549329445d8dbe3ddfe088131e8471f6a1177e150def8301bc0929c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fec91c549329445d8dbe3ddfe088131e8471f6a1177e150def8301bc0929c1a->enter($__internal_8fec91c549329445d8dbe3ddfe088131e8471f6a1177e150def8301bc0929c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_bd61556118f414d5103603f8355c22736343f726d4499479848c14f75210b0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd61556118f414d5103603f8355c22736343f726d4499479848c14f75210b0d7->enter($__internal_bd61556118f414d5103603f8355c22736343f726d4499479848c14f75210b0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_8fec91c549329445d8dbe3ddfe088131e8471f6a1177e150def8301bc0929c1a->leave($__internal_8fec91c549329445d8dbe3ddfe088131e8471f6a1177e150def8301bc0929c1a_prof);

        
        $__internal_bd61556118f414d5103603f8355c22736343f726d4499479848c14f75210b0d7->leave($__internal_bd61556118f414d5103603f8355c22736343f726d4499479848c14f75210b0d7_prof);

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
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
