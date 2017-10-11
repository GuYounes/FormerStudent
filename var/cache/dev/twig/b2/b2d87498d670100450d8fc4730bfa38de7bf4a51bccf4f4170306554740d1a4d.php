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
        $__internal_98152bf5df79040d8f0951efe5e93ed711971538a581d54f3de379b2058646dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98152bf5df79040d8f0951efe5e93ed711971538a581d54f3de379b2058646dc->enter($__internal_98152bf5df79040d8f0951efe5e93ed711971538a581d54f3de379b2058646dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_892bf0fe98ca2d555e8811b9882d2e9ab0ce5f3ad7848e6f91b561ffd44b8a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892bf0fe98ca2d555e8811b9882d2e9ab0ce5f3ad7848e6f91b561ffd44b8a8c->enter($__internal_892bf0fe98ca2d555e8811b9882d2e9ab0ce5f3ad7848e6f91b561ffd44b8a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_98152bf5df79040d8f0951efe5e93ed711971538a581d54f3de379b2058646dc->leave($__internal_98152bf5df79040d8f0951efe5e93ed711971538a581d54f3de379b2058646dc_prof);

        
        $__internal_892bf0fe98ca2d555e8811b9882d2e9ab0ce5f3ad7848e6f91b561ffd44b8a8c->leave($__internal_892bf0fe98ca2d555e8811b9882d2e9ab0ce5f3ad7848e6f91b561ffd44b8a8c_prof);

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
