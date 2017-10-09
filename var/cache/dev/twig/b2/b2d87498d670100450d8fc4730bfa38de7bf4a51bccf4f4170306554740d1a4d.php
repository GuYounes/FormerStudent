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
        $__internal_f8e6c3fb475ffbb6475ec089d9e6431b93aa02b672ad7eda02ed19df5d6cc105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e6c3fb475ffbb6475ec089d9e6431b93aa02b672ad7eda02ed19df5d6cc105->enter($__internal_f8e6c3fb475ffbb6475ec089d9e6431b93aa02b672ad7eda02ed19df5d6cc105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f77fc67c970118d8526b95bdee9a41876ef3a0f184d53d8597c244dd09b2ebe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77fc67c970118d8526b95bdee9a41876ef3a0f184d53d8597c244dd09b2ebe8->enter($__internal_f77fc67c970118d8526b95bdee9a41876ef3a0f184d53d8597c244dd09b2ebe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f8e6c3fb475ffbb6475ec089d9e6431b93aa02b672ad7eda02ed19df5d6cc105->leave($__internal_f8e6c3fb475ffbb6475ec089d9e6431b93aa02b672ad7eda02ed19df5d6cc105_prof);

        
        $__internal_f77fc67c970118d8526b95bdee9a41876ef3a0f184d53d8597c244dd09b2ebe8->leave($__internal_f77fc67c970118d8526b95bdee9a41876ef3a0f184d53d8597c244dd09b2ebe8_prof);

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
