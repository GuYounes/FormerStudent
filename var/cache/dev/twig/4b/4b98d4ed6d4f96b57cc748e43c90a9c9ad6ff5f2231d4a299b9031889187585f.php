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
        $__internal_c40ca7ea934ba401605c6266a81312b0f934cba60bc1170125bb5b4210975b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40ca7ea934ba401605c6266a81312b0f934cba60bc1170125bb5b4210975b13->enter($__internal_c40ca7ea934ba401605c6266a81312b0f934cba60bc1170125bb5b4210975b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5655823c22e62da294d455b8cce2160e913fd2077ac8ff6312d7cb79114dd034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5655823c22e62da294d455b8cce2160e913fd2077ac8ff6312d7cb79114dd034->enter($__internal_5655823c22e62da294d455b8cce2160e913fd2077ac8ff6312d7cb79114dd034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_c40ca7ea934ba401605c6266a81312b0f934cba60bc1170125bb5b4210975b13->leave($__internal_c40ca7ea934ba401605c6266a81312b0f934cba60bc1170125bb5b4210975b13_prof);

        
        $__internal_5655823c22e62da294d455b8cce2160e913fd2077ac8ff6312d7cb79114dd034->leave($__internal_5655823c22e62da294d455b8cce2160e913fd2077ac8ff6312d7cb79114dd034_prof);

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
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
