<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_98755bcf4298c4b98a6de6f1277a3634bb560419f8d7fc282df170ad46d4f7f3 extends Twig_Template
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
        $__internal_31752c9f12621203ba5fa2be31262ccf518b8ddc8aee68da0a5c21e3d9bf2bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31752c9f12621203ba5fa2be31262ccf518b8ddc8aee68da0a5c21e3d9bf2bd2->enter($__internal_31752c9f12621203ba5fa2be31262ccf518b8ddc8aee68da0a5c21e3d9bf2bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_acef7ed7c5a00bfe67ccc3b16f7d9a64c58fd739a677b3a78834d92c88ff5e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acef7ed7c5a00bfe67ccc3b16f7d9a64c58fd739a677b3a78834d92c88ff5e77->enter($__internal_acef7ed7c5a00bfe67ccc3b16f7d9a64c58fd739a677b3a78834d92c88ff5e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_31752c9f12621203ba5fa2be31262ccf518b8ddc8aee68da0a5c21e3d9bf2bd2->leave($__internal_31752c9f12621203ba5fa2be31262ccf518b8ddc8aee68da0a5c21e3d9bf2bd2_prof);

        
        $__internal_acef7ed7c5a00bfe67ccc3b16f7d9a64c58fd739a677b3a78834d92c88ff5e77->leave($__internal_acef7ed7c5a00bfe67ccc3b16f7d9a64c58fd739a677b3a78834d92c88ff5e77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
