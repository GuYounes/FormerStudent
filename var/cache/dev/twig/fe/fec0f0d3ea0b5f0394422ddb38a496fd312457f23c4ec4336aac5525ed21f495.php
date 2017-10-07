<?php

/* base.html.twig */
class __TwigTemplate_8f7ed79b096fe6e3f110f36f49a6743b2a52208b16b91984b4ebd26a00a0735c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baefd7cbce9600f5b6553029e60af451f77f9f8aad791243efde4077a26cd37f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baefd7cbce9600f5b6553029e60af451f77f9f8aad791243efde4077a26cd37f->enter($__internal_baefd7cbce9600f5b6553029e60af451f77f9f8aad791243efde4077a26cd37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ed51497caeef18ffd6fcf3222778e5bf757c3721966a5ced7d1cfb9f1fe2d590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed51497caeef18ffd6fcf3222778e5bf757c3721966a5ced7d1cfb9f1fe2d590->enter($__internal_ed51497caeef18ffd6fcf3222778e5bf757c3721966a5ced7d1cfb9f1fe2d590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_baefd7cbce9600f5b6553029e60af451f77f9f8aad791243efde4077a26cd37f->leave($__internal_baefd7cbce9600f5b6553029e60af451f77f9f8aad791243efde4077a26cd37f_prof);

        
        $__internal_ed51497caeef18ffd6fcf3222778e5bf757c3721966a5ced7d1cfb9f1fe2d590->leave($__internal_ed51497caeef18ffd6fcf3222778e5bf757c3721966a5ced7d1cfb9f1fe2d590_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9edba9fb2f125ddcca149d49d03620fbb13d30ecdc40ce5587f5204b8eac84fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9edba9fb2f125ddcca149d49d03620fbb13d30ecdc40ce5587f5204b8eac84fa->enter($__internal_9edba9fb2f125ddcca149d49d03620fbb13d30ecdc40ce5587f5204b8eac84fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87c15bcb23ddf74f9444038e931b532278bc3366df1d639b7a6cc3a25a43940d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c15bcb23ddf74f9444038e931b532278bc3366df1d639b7a6cc3a25a43940d->enter($__internal_87c15bcb23ddf74f9444038e931b532278bc3366df1d639b7a6cc3a25a43940d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_87c15bcb23ddf74f9444038e931b532278bc3366df1d639b7a6cc3a25a43940d->leave($__internal_87c15bcb23ddf74f9444038e931b532278bc3366df1d639b7a6cc3a25a43940d_prof);

        
        $__internal_9edba9fb2f125ddcca149d49d03620fbb13d30ecdc40ce5587f5204b8eac84fa->leave($__internal_9edba9fb2f125ddcca149d49d03620fbb13d30ecdc40ce5587f5204b8eac84fa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02afab20299ad305f890a5228d23baff0198be6733a569055db9e9f48584f67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02afab20299ad305f890a5228d23baff0198be6733a569055db9e9f48584f67a->enter($__internal_02afab20299ad305f890a5228d23baff0198be6733a569055db9e9f48584f67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f74417928c425802ad07d329bfef825e5c170eb1359a30941470a1913dd69419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74417928c425802ad07d329bfef825e5c170eb1359a30941470a1913dd69419->enter($__internal_f74417928c425802ad07d329bfef825e5c170eb1359a30941470a1913dd69419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f74417928c425802ad07d329bfef825e5c170eb1359a30941470a1913dd69419->leave($__internal_f74417928c425802ad07d329bfef825e5c170eb1359a30941470a1913dd69419_prof);

        
        $__internal_02afab20299ad305f890a5228d23baff0198be6733a569055db9e9f48584f67a->leave($__internal_02afab20299ad305f890a5228d23baff0198be6733a569055db9e9f48584f67a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cfb8c1e91e3f238c0d285d24a313e710c23dc302bf3a304572145d1e18b5a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfb8c1e91e3f238c0d285d24a313e710c23dc302bf3a304572145d1e18b5a3c->enter($__internal_3cfb8c1e91e3f238c0d285d24a313e710c23dc302bf3a304572145d1e18b5a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0de2843a683248a73cb51370135d10327bc5f1df99eed77fea99c112c672ee33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de2843a683248a73cb51370135d10327bc5f1df99eed77fea99c112c672ee33->enter($__internal_0de2843a683248a73cb51370135d10327bc5f1df99eed77fea99c112c672ee33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0de2843a683248a73cb51370135d10327bc5f1df99eed77fea99c112c672ee33->leave($__internal_0de2843a683248a73cb51370135d10327bc5f1df99eed77fea99c112c672ee33_prof);

        
        $__internal_3cfb8c1e91e3f238c0d285d24a313e710c23dc302bf3a304572145d1e18b5a3c->leave($__internal_3cfb8c1e91e3f238c0d285d24a313e710c23dc302bf3a304572145d1e18b5a3c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb32d83f348886122ec4c1c915804caca4ad30b59929ad2ebd08e9d976a86ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb32d83f348886122ec4c1c915804caca4ad30b59929ad2ebd08e9d976a86ed0->enter($__internal_eb32d83f348886122ec4c1c915804caca4ad30b59929ad2ebd08e9d976a86ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7389461e99bcc1819a81ddd8565521509751a585a472504cb872e81cee8443a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7389461e99bcc1819a81ddd8565521509751a585a472504cb872e81cee8443a8->enter($__internal_7389461e99bcc1819a81ddd8565521509751a585a472504cb872e81cee8443a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7389461e99bcc1819a81ddd8565521509751a585a472504cb872e81cee8443a8->leave($__internal_7389461e99bcc1819a81ddd8565521509751a585a472504cb872e81cee8443a8_prof);

        
        $__internal_eb32d83f348886122ec4c1c915804caca4ad30b59929ad2ebd08e9d976a86ed0->leave($__internal_eb32d83f348886122ec4c1c915804caca4ad30b59929ad2ebd08e9d976a86ed0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\app\\Resources\\views\\base.html.twig");
    }
}
