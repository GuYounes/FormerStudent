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
        $__internal_c7f36b652d8790267dbe50310b281a2261c1f7f545934077d612d160cb866609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f36b652d8790267dbe50310b281a2261c1f7f545934077d612d160cb866609->enter($__internal_c7f36b652d8790267dbe50310b281a2261c1f7f545934077d612d160cb866609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_33beabfdbcf6a7941097da3233f1d9326a85021b1fd8ff591959b6f50de72154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33beabfdbcf6a7941097da3233f1d9326a85021b1fd8ff591959b6f50de72154->enter($__internal_33beabfdbcf6a7941097da3233f1d9326a85021b1fd8ff591959b6f50de72154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c7f36b652d8790267dbe50310b281a2261c1f7f545934077d612d160cb866609->leave($__internal_c7f36b652d8790267dbe50310b281a2261c1f7f545934077d612d160cb866609_prof);

        
        $__internal_33beabfdbcf6a7941097da3233f1d9326a85021b1fd8ff591959b6f50de72154->leave($__internal_33beabfdbcf6a7941097da3233f1d9326a85021b1fd8ff591959b6f50de72154_prof);

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
