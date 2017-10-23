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
        $__internal_394c106d4d88a296211d7c6fad97ec039eb3598e1f11fc35b98c68be622895fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394c106d4d88a296211d7c6fad97ec039eb3598e1f11fc35b98c68be622895fc->enter($__internal_394c106d4d88a296211d7c6fad97ec039eb3598e1f11fc35b98c68be622895fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_da1eb686b9f497356fbe3d0429d0827c85078a390ae202c5f844e2e15c4b725f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1eb686b9f497356fbe3d0429d0827c85078a390ae202c5f844e2e15c4b725f->enter($__internal_da1eb686b9f497356fbe3d0429d0827c85078a390ae202c5f844e2e15c4b725f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_394c106d4d88a296211d7c6fad97ec039eb3598e1f11fc35b98c68be622895fc->leave($__internal_394c106d4d88a296211d7c6fad97ec039eb3598e1f11fc35b98c68be622895fc_prof);

        
        $__internal_da1eb686b9f497356fbe3d0429d0827c85078a390ae202c5f844e2e15c4b725f->leave($__internal_da1eb686b9f497356fbe3d0429d0827c85078a390ae202c5f844e2e15c4b725f_prof);

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
