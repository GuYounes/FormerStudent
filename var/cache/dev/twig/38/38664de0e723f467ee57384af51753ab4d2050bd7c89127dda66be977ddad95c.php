<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_cf2920a3d083a5552fb41be4bba8c61d83bd9b69c4c9d5d4fd97eda27f63085f extends Twig_Template
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
        $__internal_7783cad2ed06e3844aea8647f68a321b6e69e6854d37ffdedaf94bf66098e864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7783cad2ed06e3844aea8647f68a321b6e69e6854d37ffdedaf94bf66098e864->enter($__internal_7783cad2ed06e3844aea8647f68a321b6e69e6854d37ffdedaf94bf66098e864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_13932850689f3984f404fd03a79c6e38924b9c899ce9849c8c04d366b791b2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13932850689f3984f404fd03a79c6e38924b9c899ce9849c8c04d366b791b2ff->enter($__internal_13932850689f3984f404fd03a79c6e38924b9c899ce9849c8c04d366b791b2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7783cad2ed06e3844aea8647f68a321b6e69e6854d37ffdedaf94bf66098e864->leave($__internal_7783cad2ed06e3844aea8647f68a321b6e69e6854d37ffdedaf94bf66098e864_prof);

        
        $__internal_13932850689f3984f404fd03a79c6e38924b9c899ce9849c8c04d366b791b2ff->leave($__internal_13932850689f3984f404fd03a79c6e38924b9c899ce9849c8c04d366b791b2ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
