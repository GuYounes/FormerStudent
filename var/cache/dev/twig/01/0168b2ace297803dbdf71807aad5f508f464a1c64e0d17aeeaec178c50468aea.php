<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_9a821edd9f6dcf3fcd4ec5559029aaefcabc2d27e3e77d6a41140482740d7833 extends Twig_Template
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
        $__internal_5ee7e33d39446eee6620982d19f574a74660318ecc54c0ed042b8bc4f672f4f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee7e33d39446eee6620982d19f574a74660318ecc54c0ed042b8bc4f672f4f2->enter($__internal_5ee7e33d39446eee6620982d19f574a74660318ecc54c0ed042b8bc4f672f4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar.html.twig"));

        $__internal_47d1e10a7cdde60a1270839a499649f023b4c61a8ad38b367b7b9898605b7a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d1e10a7cdde60a1270839a499649f023b4c61a8ad38b367b7b9898605b7a26->enter($__internal_47d1e10a7cdde60a1270839a499649f023b4c61a8ad38b367b7b9898605b7a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar.html.twig"));

        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" accesskey=\"D\">
        ";
        // line 4
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo "
    </a>
</div>
<div id=\"sfToolbarClearer-";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new Twig_Error_Runtime('Variable "templates" does not exist.', 10, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 11
            echo "        ";
            if (            $this->loadTemplate($context["template"], "WebProfilerBundle:Profiler:toolbar.html.twig", 11)->hasBlock("toolbar", $context)) {
                // line 12
                echo "            ";
                $__internal_ace5d7adba1ca9a62f7d75998f3c40e177fc043d87c453194a4535a176429b18 = array("collector" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 13
(isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 13, $this->getSourceContext()); })()), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>                 // line 14
(isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 14, $this->getSourceContext()); })()), "token" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 15
(isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 15, $this->getSourceContext()); })()), "token", array()), "name" =>                 // line 16
$context["name"], "profiler_markup_version" =>                 // line 17
(isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 17, $this->getSourceContext()); })()), "csp_script_nonce" =>                 // line 18
(isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new Twig_Error_Runtime('Variable "csp_script_nonce" does not exist.', 18, $this->getSourceContext()); })()), "csp_style_nonce" =>                 // line 19
(isset($context["csp_style_nonce"]) || array_key_exists("csp_style_nonce", $context) ? $context["csp_style_nonce"] : (function () { throw new Twig_Error_Runtime('Variable "csp_style_nonce" does not exist.', 19, $this->getSourceContext()); })()));
                if (!is_array($__internal_ace5d7adba1ca9a62f7d75998f3c40e177fc043d87c453194a4535a176429b18)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_ace5d7adba1ca9a62f7d75998f3c40e177fc043d87c453194a4535a176429b18);
                // line 21
                echo "                ";
                $this->loadTemplate($context["template"], "WebProfilerBundle:Profiler:toolbar.html.twig", 21)->displayBlock("toolbar", $context);
                echo "
            ";
                $context = $context['_parent'];
                // line 23
                echo "        ";
            }
            // line 24
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <a class=\"hide-button\" id=\"sfToolbarHideButton-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
        echo "\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
        ";
        // line 27
        echo twig_include($this->env, $context, "@WebProfiler/Icon/close.svg");
        echo "
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
        $__internal_5ee7e33d39446eee6620982d19f574a74660318ecc54c0ed042b8bc4f672f4f2->leave($__internal_5ee7e33d39446eee6620982d19f574a74660318ecc54c0ed042b8bc4f672f4f2_prof);

        
        $__internal_47d1e10a7cdde60a1270839a499649f023b4c61a8ad38b367b7b9898605b7a26->leave($__internal_47d1e10a7cdde60a1270839a499649f023b4c61a8ad38b367b7b9898605b7a26_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  112 => 26,  109 => 25,  95 => 24,  92 => 23,  86 => 21,  79 => 19,  78 => 18,  77 => 17,  76 => 16,  75 => 15,  74 => 14,  73 => 13,  71 => 12,  68 => 11,  51 => 10,  47 => 9,  42 => 7,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-{{ token }}\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-{{ token }}\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/symfony.svg') }}
    </a>
</div>
<div id=\"sfToolbarClearer-{{ token }}\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-{{ token }}\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    {% for name, template in templates %}
        {% if block('toolbar', template) is defined %}
            {% with {
                collector: profile.getcollector(name),
                profiler_url: profiler_url,
                token: profile.token,
                name: name,
                profiler_markup_version: profiler_markup_version,
                csp_script_nonce: csp_script_nonce,
                csp_style_nonce: csp_style_nonce
              } %}
                {{ block('toolbar', template) }}
            {% endwith %}
        {% endif %}
    {% endfor %}

    <a class=\"hide-button\" id=\"sfToolbarHideButton-{{ token }}\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/close.svg') }}
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
", "WebProfilerBundle:Profiler:toolbar.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar.html.twig");
    }
}