<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_cef7f075b05ea06e2d742101323d67ce045b1b66beeba9dbcfba4f1acd990946 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9e8a92b4f607c1c58c4e276580b798b4a453a2f47975bb3a965fedfb184cbf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e8a92b4f607c1c58c4e276580b798b4a453a2f47975bb3a965fedfb184cbf3->enter($__internal_b9e8a92b4f607c1c58c4e276580b798b4a453a2f47975bb3a965fedfb184cbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_9dc6f362fadd4a78b98d9b8a50ef35a04a9e5fc732b3c4aa34c1160e4a4bda8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc6f362fadd4a78b98d9b8a50ef35a04a9e5fc732b3c4aa34c1160e4a4bda8d->enter($__internal_9dc6f362fadd4a78b98d9b8a50ef35a04a9e5fc732b3c4aa34c1160e4a4bda8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_b9e8a92b4f607c1c58c4e276580b798b4a453a2f47975bb3a965fedfb184cbf3->leave($__internal_b9e8a92b4f607c1c58c4e276580b798b4a453a2f47975bb3a965fedfb184cbf3_prof);

        
        $__internal_9dc6f362fadd4a78b98d9b8a50ef35a04a9e5fc732b3c4aa34c1160e4a4bda8d->leave($__internal_9dc6f362fadd4a78b98d9b8a50ef35a04a9e5fc732b3c4aa34c1160e4a4bda8d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c921817b49c39850e6951e542492907cc95b1fc3603a293b52f7b6c7045d234e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c921817b49c39850e6951e542492907cc95b1fc3603a293b52f7b6c7045d234e->enter($__internal_c921817b49c39850e6951e542492907cc95b1fc3603a293b52f7b6c7045d234e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61339d31a5971f6ffa9ffd6440b616b0d0ae4de16841bcb2120518cf2fa37ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61339d31a5971f6ffa9ffd6440b616b0d0ae4de16841bcb2120518cf2fa37ffe->enter($__internal_61339d31a5971f6ffa9ffd6440b616b0d0ae4de16841bcb2120518cf2fa37ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_61339d31a5971f6ffa9ffd6440b616b0d0ae4de16841bcb2120518cf2fa37ffe->leave($__internal_61339d31a5971f6ffa9ffd6440b616b0d0ae4de16841bcb2120518cf2fa37ffe_prof);

        
        $__internal_c921817b49c39850e6951e542492907cc95b1fc3603a293b52f7b6c7045d234e->leave($__internal_c921817b49c39850e6951e542492907cc95b1fc3603a293b52f7b6c7045d234e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_11f23a36920dd4043973e60f225b1eb26bd41671e0765db10ec810569d21fac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f23a36920dd4043973e60f225b1eb26bd41671e0765db10ec810569d21fac2->enter($__internal_11f23a36920dd4043973e60f225b1eb26bd41671e0765db10ec810569d21fac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f6b3bca9f5a1815ce91752d9321cf12b2b5dc9896313d7fd0d4ca0eaa87c21dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b3bca9f5a1815ce91752d9321cf12b2b5dc9896313d7fd0d4ca0eaa87c21dc->enter($__internal_f6b3bca9f5a1815ce91752d9321cf12b2b5dc9896313d7fd0d4ca0eaa87c21dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f6b3bca9f5a1815ce91752d9321cf12b2b5dc9896313d7fd0d4ca0eaa87c21dc->leave($__internal_f6b3bca9f5a1815ce91752d9321cf12b2b5dc9896313d7fd0d4ca0eaa87c21dc_prof);

        
        $__internal_11f23a36920dd4043973e60f225b1eb26bd41671e0765db10ec810569d21fac2->leave($__internal_11f23a36920dd4043973e60f225b1eb26bd41671e0765db10ec810569d21fac2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a684e85e669e059e6e6298760022a47ff5d3955288b524083d40740e9b5550eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a684e85e669e059e6e6298760022a47ff5d3955288b524083d40740e9b5550eb->enter($__internal_a684e85e669e059e6e6298760022a47ff5d3955288b524083d40740e9b5550eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4bd7d5bcc250c483e6f3c6b6aca0c2f650a06310b34949c2fdd396674532e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bd7d5bcc250c483e6f3c6b6aca0c2f650a06310b34949c2fdd396674532e49->enter($__internal_e4bd7d5bcc250c483e6f3c6b6aca0c2f650a06310b34949c2fdd396674532e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e4bd7d5bcc250c483e6f3c6b6aca0c2f650a06310b34949c2fdd396674532e49->leave($__internal_e4bd7d5bcc250c483e6f3c6b6aca0c2f650a06310b34949c2fdd396674532e49_prof);

        
        $__internal_a684e85e669e059e6e6298760022a47ff5d3955288b524083d40740e9b5550eb->leave($__internal_a684e85e669e059e6e6298760022a47ff5d3955288b524083d40740e9b5550eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
