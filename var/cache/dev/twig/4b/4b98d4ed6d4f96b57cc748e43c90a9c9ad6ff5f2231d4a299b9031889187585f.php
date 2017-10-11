<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_beea5560cd01a13ccc79c785aa1255ed8149169368f7ffcdffe51a10d4bd4c51 extends Twig_Template
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
        $__internal_c7d644b631a4be2fa6ab13ec24bcbd9a440474ccc5e9950855ca3d84169fd2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d644b631a4be2fa6ab13ec24bcbd9a440474ccc5e9950855ca3d84169fd2e4->enter($__internal_c7d644b631a4be2fa6ab13ec24bcbd9a440474ccc5e9950855ca3d84169fd2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_1db447fdbe53d5d62e4c5c2fbc4519d419ef29c12adddcab3ce8cf2592b3a146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db447fdbe53d5d62e4c5c2fbc4519d419ef29c12adddcab3ce8cf2592b3a146->enter($__internal_1db447fdbe53d5d62e4c5c2fbc4519d419ef29c12adddcab3ce8cf2592b3a146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c7d644b631a4be2fa6ab13ec24bcbd9a440474ccc5e9950855ca3d84169fd2e4->leave($__internal_c7d644b631a4be2fa6ab13ec24bcbd9a440474ccc5e9950855ca3d84169fd2e4_prof);

        
        $__internal_1db447fdbe53d5d62e4c5c2fbc4519d419ef29c12adddcab3ce8cf2592b3a146->leave($__internal_1db447fdbe53d5d62e4c5c2fbc4519d419ef29c12adddcab3ce8cf2592b3a146_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
