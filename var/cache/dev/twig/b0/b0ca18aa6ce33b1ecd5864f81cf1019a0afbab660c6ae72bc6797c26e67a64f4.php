<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7f69657e3d276c16edee093717c05dcc3221cb80df4accd26030275aa702df7b extends Twig_Template
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
        $__internal_a9795de216ff29bd366993bfb83b179548ca0c74e64e7d0752052a5eff3415e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9795de216ff29bd366993bfb83b179548ca0c74e64e7d0752052a5eff3415e1->enter($__internal_a9795de216ff29bd366993bfb83b179548ca0c74e64e7d0752052a5eff3415e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d80efb3f581fc54a52bb3a4b69204b4e0ae4d63b3ca07f52549355e4178aa0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80efb3f581fc54a52bb3a4b69204b4e0ae4d63b3ca07f52549355e4178aa0f2->enter($__internal_d80efb3f581fc54a52bb3a4b69204b4e0ae4d63b3ca07f52549355e4178aa0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a9795de216ff29bd366993bfb83b179548ca0c74e64e7d0752052a5eff3415e1->leave($__internal_a9795de216ff29bd366993bfb83b179548ca0c74e64e7d0752052a5eff3415e1_prof);

        
        $__internal_d80efb3f581fc54a52bb3a4b69204b4e0ae4d63b3ca07f52549355e4178aa0f2->leave($__internal_d80efb3f581fc54a52bb3a4b69204b4e0ae4d63b3ca07f52549355e4178aa0f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
