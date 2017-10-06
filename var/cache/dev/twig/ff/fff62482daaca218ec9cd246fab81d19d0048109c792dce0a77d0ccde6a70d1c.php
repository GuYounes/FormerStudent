<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b953a9446d4d6aa59d0ad956d4946551351e4c1c46b13240aca99d04daed6964 extends Twig_Template
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
        $__internal_73776d7376a7826ac1835105c4cd7b346fb3478424eafce4222251cb7ec3f595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73776d7376a7826ac1835105c4cd7b346fb3478424eafce4222251cb7ec3f595->enter($__internal_73776d7376a7826ac1835105c4cd7b346fb3478424eafce4222251cb7ec3f595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7fd32d825f033f4ae0a593e33efb9f61967625a6032b2112b6e40bf8f0e9174f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd32d825f033f4ae0a593e33efb9f61967625a6032b2112b6e40bf8f0e9174f->enter($__internal_7fd32d825f033f4ae0a593e33efb9f61967625a6032b2112b6e40bf8f0e9174f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_73776d7376a7826ac1835105c4cd7b346fb3478424eafce4222251cb7ec3f595->leave($__internal_73776d7376a7826ac1835105c4cd7b346fb3478424eafce4222251cb7ec3f595_prof);

        
        $__internal_7fd32d825f033f4ae0a593e33efb9f61967625a6032b2112b6e40bf8f0e9174f->leave($__internal_7fd32d825f033f4ae0a593e33efb9f61967625a6032b2112b6e40bf8f0e9174f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
