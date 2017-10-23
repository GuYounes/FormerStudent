<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_48200086bb9d2dbfeb3992631c31486be2dca7d29df5b5175c58b273acae3f41 extends Twig_Template
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
        $__internal_6ef14a720db649309995db3c294d0e8870d11712d0f6bd34726aed8ad67d8f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef14a720db649309995db3c294d0e8870d11712d0f6bd34726aed8ad67d8f30->enter($__internal_6ef14a720db649309995db3c294d0e8870d11712d0f6bd34726aed8ad67d8f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_da1a114516388a366b782c95018e3f83b6ee82a1c2b2103d6288ccf215cc1fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1a114516388a366b782c95018e3f83b6ee82a1c2b2103d6288ccf215cc1fd2->enter($__internal_da1a114516388a366b782c95018e3f83b6ee82a1c2b2103d6288ccf215cc1fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6ef14a720db649309995db3c294d0e8870d11712d0f6bd34726aed8ad67d8f30->leave($__internal_6ef14a720db649309995db3c294d0e8870d11712d0f6bd34726aed8ad67d8f30_prof);

        
        $__internal_da1a114516388a366b782c95018e3f83b6ee82a1c2b2103d6288ccf215cc1fd2->leave($__internal_da1a114516388a366b782c95018e3f83b6ee82a1c2b2103d6288ccf215cc1fd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
