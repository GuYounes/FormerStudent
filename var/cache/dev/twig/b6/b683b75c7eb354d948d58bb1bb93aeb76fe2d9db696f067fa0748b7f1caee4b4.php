<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b4016a23054f8433a224754a4a29b439a757ab137c4ec1fb4e908e7bb2a38f8b extends Twig_Template
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
        $__internal_8389bf3160a2477c91665759b25e5de684e3b3a23e021bdd018183416988027a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8389bf3160a2477c91665759b25e5de684e3b3a23e021bdd018183416988027a->enter($__internal_8389bf3160a2477c91665759b25e5de684e3b3a23e021bdd018183416988027a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d36027fdc14251ece096a2267e9a440a24588dfab403912d452b88862a5dcdd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36027fdc14251ece096a2267e9a440a24588dfab403912d452b88862a5dcdd5->enter($__internal_d36027fdc14251ece096a2267e9a440a24588dfab403912d452b88862a5dcdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8389bf3160a2477c91665759b25e5de684e3b3a23e021bdd018183416988027a->leave($__internal_8389bf3160a2477c91665759b25e5de684e3b3a23e021bdd018183416988027a_prof);

        
        $__internal_d36027fdc14251ece096a2267e9a440a24588dfab403912d452b88862a5dcdd5->leave($__internal_d36027fdc14251ece096a2267e9a440a24588dfab403912d452b88862a5dcdd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
