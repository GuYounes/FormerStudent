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
        $__internal_b7559102ef1f6146083d3110ff3533dbd26b3f4463479d222db0bc141367223b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7559102ef1f6146083d3110ff3533dbd26b3f4463479d222db0bc141367223b->enter($__internal_b7559102ef1f6146083d3110ff3533dbd26b3f4463479d222db0bc141367223b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_43f1fe52fd406e6504a24d82c80fbc353cf8bfbc6bcbd21718d89d59821c660f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f1fe52fd406e6504a24d82c80fbc353cf8bfbc6bcbd21718d89d59821c660f->enter($__internal_43f1fe52fd406e6504a24d82c80fbc353cf8bfbc6bcbd21718d89d59821c660f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b7559102ef1f6146083d3110ff3533dbd26b3f4463479d222db0bc141367223b->leave($__internal_b7559102ef1f6146083d3110ff3533dbd26b3f4463479d222db0bc141367223b_prof);

        
        $__internal_43f1fe52fd406e6504a24d82c80fbc353cf8bfbc6bcbd21718d89d59821c660f->leave($__internal_43f1fe52fd406e6504a24d82c80fbc353cf8bfbc6bcbd21718d89d59821c660f_prof);

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
