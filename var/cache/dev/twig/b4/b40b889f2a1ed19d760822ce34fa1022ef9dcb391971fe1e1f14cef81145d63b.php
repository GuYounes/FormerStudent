<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_731ee1c27adfdcd299f0134febceae6024a6e66e3c13b6e9504926480a7ac2e0 extends Twig_Template
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
        $__internal_34c9d073ab9a64d3ad8846faddac34e5a10f53cced7307b33c7838d030ac50fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c9d073ab9a64d3ad8846faddac34e5a10f53cced7307b33c7838d030ac50fc->enter($__internal_34c9d073ab9a64d3ad8846faddac34e5a10f53cced7307b33c7838d030ac50fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f815ef105591ad5abda6c6a623901ddce7d25f0b7003407ab309ef28ea882339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f815ef105591ad5abda6c6a623901ddce7d25f0b7003407ab309ef28ea882339->enter($__internal_f815ef105591ad5abda6c6a623901ddce7d25f0b7003407ab309ef28ea882339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_34c9d073ab9a64d3ad8846faddac34e5a10f53cced7307b33c7838d030ac50fc->leave($__internal_34c9d073ab9a64d3ad8846faddac34e5a10f53cced7307b33c7838d030ac50fc_prof);

        
        $__internal_f815ef105591ad5abda6c6a623901ddce7d25f0b7003407ab309ef28ea882339->leave($__internal_f815ef105591ad5abda6c6a623901ddce7d25f0b7003407ab309ef28ea882339_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
