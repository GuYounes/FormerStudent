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
        $__internal_59401a34cf38de4acd8f3139277e8b6d62b3d125b580a641dd61b53abe450f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59401a34cf38de4acd8f3139277e8b6d62b3d125b580a641dd61b53abe450f2e->enter($__internal_59401a34cf38de4acd8f3139277e8b6d62b3d125b580a641dd61b53abe450f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_74808ba36784750571cd1e2113c596c0ba6029c1f2b35f41698136af977b806e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74808ba36784750571cd1e2113c596c0ba6029c1f2b35f41698136af977b806e->enter($__internal_74808ba36784750571cd1e2113c596c0ba6029c1f2b35f41698136af977b806e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_59401a34cf38de4acd8f3139277e8b6d62b3d125b580a641dd61b53abe450f2e->leave($__internal_59401a34cf38de4acd8f3139277e8b6d62b3d125b580a641dd61b53abe450f2e_prof);

        
        $__internal_74808ba36784750571cd1e2113c596c0ba6029c1f2b35f41698136af977b806e->leave($__internal_74808ba36784750571cd1e2113c596c0ba6029c1f2b35f41698136af977b806e_prof);

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
