<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e3fbf5084fbef8cc27802c9e366340fc7ad7d1385c954ef3ea502a77cdbfda3b extends Twig_Template
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
        $__internal_02429c6fa08a4f78a363e6716123814c58a5d6ef92654c1327588e46f635c4fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02429c6fa08a4f78a363e6716123814c58a5d6ef92654c1327588e46f635c4fd->enter($__internal_02429c6fa08a4f78a363e6716123814c58a5d6ef92654c1327588e46f635c4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b4f2f45809074de0eba424087a5035578924b7b0694b6a6865b75342ebd4d727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f2f45809074de0eba424087a5035578924b7b0694b6a6865b75342ebd4d727->enter($__internal_b4f2f45809074de0eba424087a5035578924b7b0694b6a6865b75342ebd4d727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_02429c6fa08a4f78a363e6716123814c58a5d6ef92654c1327588e46f635c4fd->leave($__internal_02429c6fa08a4f78a363e6716123814c58a5d6ef92654c1327588e46f635c4fd_prof);

        
        $__internal_b4f2f45809074de0eba424087a5035578924b7b0694b6a6865b75342ebd4d727->leave($__internal_b4f2f45809074de0eba424087a5035578924b7b0694b6a6865b75342ebd4d727_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
