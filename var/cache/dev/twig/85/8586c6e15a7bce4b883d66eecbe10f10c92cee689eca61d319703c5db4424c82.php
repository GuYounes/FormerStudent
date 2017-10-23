<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9d6c3d0a4cfe4773349ab2578c3b8c06c1fe548fe91ef22c38af05d87a79a79e extends Twig_Template
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
        $__internal_9db942d9fa81020aeaeb7c5d355551c06399474143122f70ab2fdf41a50cff9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db942d9fa81020aeaeb7c5d355551c06399474143122f70ab2fdf41a50cff9d->enter($__internal_9db942d9fa81020aeaeb7c5d355551c06399474143122f70ab2fdf41a50cff9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_887ad840b79e61c4accc042b1c99463d4ac80ce5816c55f2f056e9dccad527c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887ad840b79e61c4accc042b1c99463d4ac80ce5816c55f2f056e9dccad527c8->enter($__internal_887ad840b79e61c4accc042b1c99463d4ac80ce5816c55f2f056e9dccad527c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9db942d9fa81020aeaeb7c5d355551c06399474143122f70ab2fdf41a50cff9d->leave($__internal_9db942d9fa81020aeaeb7c5d355551c06399474143122f70ab2fdf41a50cff9d_prof);

        
        $__internal_887ad840b79e61c4accc042b1c99463d4ac80ce5816c55f2f056e9dccad527c8->leave($__internal_887ad840b79e61c4accc042b1c99463d4ac80ce5816c55f2f056e9dccad527c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
