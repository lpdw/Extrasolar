<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_052c249be0995062fbbef91781923b83984f4ede9ee305195fa3ac620c765b9d extends Twig_Template
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
<<<<<<< HEAD
        $__internal_40ecb245df2d005ee6cfd21d7b103dc7c71d13966c89263d91ed1e1ae4d0b241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ecb245df2d005ee6cfd21d7b103dc7c71d13966c89263d91ed1e1ae4d0b241->enter($__internal_40ecb245df2d005ee6cfd21d7b103dc7c71d13966c89263d91ed1e1ae4d0b241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_ba28cd2c665108201a9f28145379be50ae1b4abc7c743b0fd7c54ba1d9f7e657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba28cd2c665108201a9f28145379be50ae1b4abc7c743b0fd7c54ba1d9f7e657->enter($__internal_ba28cd2c665108201a9f28145379be50ae1b4abc7c743b0fd7c54ba1d9f7e657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));
=======
        $__internal_a05311d0f71874c542ebe982d94f552c9b028cd67b8bc0e7c7dc6e5c7ef817b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05311d0f71874c542ebe982d94f552c9b028cd67b8bc0e7c7dc6e5c7ef817b5->enter($__internal_a05311d0f71874c542ebe982d94f552c9b028cd67b8bc0e7c7dc6e5c7ef817b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_de302cf7e3cb56267c9d7e63fd4f18d0d00aca6f518b1df8e04440cb9f305981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de302cf7e3cb56267c9d7e63fd4f18d0d00aca6f518b1df8e04440cb9f305981->enter($__internal_de302cf7e3cb56267c9d7e63fd4f18d0d00aca6f518b1df8e04440cb9f305981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));
>>>>>>> 305a5c83807d551c85ea4575bf6b100c3f8213a3

        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
";
        // line 2
        if (("normal" != ($context["position"] ?? $this->getContext($context, "position")))) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
        <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-";
            // line 4
            echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
            echo "\" accesskey=\"D\">
            ";
            // line 5
            echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
            echo "
        </a>
    </div>
    <style";
            // line 8
            if (($context["csp_style_nonce"] ?? $this->getContext($context, "csp_style_nonce"))) {
                echo " nonce=\"";
                echo twig_escape_filter($this->env, ($context["csp_style_nonce"] ?? $this->getContext($context, "csp_style_nonce")), "html", null, true);
                echo "\"";
            }
            echo ">
        ";
            // line 9
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar.css.twig", array("position" => ($context["position"] ?? $this->getContext($context, "position")), "floatable" => true));
            echo "
    </style>
    <div id=\"sfToolbarClearer-";
            // line 11
            echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-toolbar-clearer\"></div>
";
        }
        // line 13
        echo "
<div id=\"sfToolbarMainContent-";
        // line 14
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? $this->getContext($context, "templates")));
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
            // line 16
            echo "        ";
            if (            $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 16)->hasBlock("toolbar", $context)) {
                // line 17
                echo "            ";
<<<<<<< HEAD
                $__internal_725d8f314468db4915b822985f37a94f71fa63fcbc5fb381aa6f577c536700c4 = array("collector" => $this->getAttribute(                // line 18
=======
                $__internal_3de80b9bf9816251373da513fa23e01cac98694761368e99622283ef85e99fbe = array("collector" => $this->getAttribute(                // line 18
>>>>>>> 305a5c83807d551c85ea4575bf6b100c3f8213a3
($context["profile"] ?? $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>                 // line 19
($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "token" => $this->getAttribute(                // line 20
($context["profile"] ?? $this->getContext($context, "profile")), "token", array()), "name" =>                 // line 21
$context["name"], "profiler_markup_version" =>                 // line 22
($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), "csp_script_nonce" =>                 // line 23
($context["csp_script_nonce"] ?? $this->getContext($context, "csp_script_nonce")), "csp_style_nonce" =>                 // line 24
($context["csp_style_nonce"] ?? $this->getContext($context, "csp_style_nonce")));
<<<<<<< HEAD
                if (!is_array($__internal_725d8f314468db4915b822985f37a94f71fa63fcbc5fb381aa6f577c536700c4)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_725d8f314468db4915b822985f37a94f71fa63fcbc5fb381aa6f577c536700c4);
=======
                if (!is_array($__internal_3de80b9bf9816251373da513fa23e01cac98694761368e99622283ef85e99fbe)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_3de80b9bf9816251373da513fa23e01cac98694761368e99622283ef85e99fbe);
>>>>>>> 305a5c83807d551c85ea4575bf6b100c3f8213a3
                // line 26
                echo "                ";
                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 26)->displayBlock("toolbar", $context);
                echo "
            ";
                $context = $context['_parent'];
                // line 28
                echo "        ";
            }
            // line 29
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
        // line 30
        echo "
    ";
        // line 31
        if (("normal" != ($context["position"] ?? $this->getContext($context, "position")))) {
            // line 32
            echo "        <a class=\"hide-button\" id=\"sfToolbarHideButton-";
            echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
            echo "\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
            ";
            // line 33
            echo twig_include($this->env, $context, "@WebProfiler/Icon/close.svg");
            echo "
        </a>
    ";
        }
        // line 36
        echo "</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
<<<<<<< HEAD
        $__internal_40ecb245df2d005ee6cfd21d7b103dc7c71d13966c89263d91ed1e1ae4d0b241->leave($__internal_40ecb245df2d005ee6cfd21d7b103dc7c71d13966c89263d91ed1e1ae4d0b241_prof);

        
        $__internal_ba28cd2c665108201a9f28145379be50ae1b4abc7c743b0fd7c54ba1d9f7e657->leave($__internal_ba28cd2c665108201a9f28145379be50ae1b4abc7c743b0fd7c54ba1d9f7e657_prof);
=======
        $__internal_a05311d0f71874c542ebe982d94f552c9b028cd67b8bc0e7c7dc6e5c7ef817b5->leave($__internal_a05311d0f71874c542ebe982d94f552c9b028cd67b8bc0e7c7dc6e5c7ef817b5_prof);

        
        $__internal_de302cf7e3cb56267c9d7e63fd4f18d0d00aca6f518b1df8e04440cb9f305981->leave($__internal_de302cf7e3cb56267c9d7e63fd4f18d0d00aca6f518b1df8e04440cb9f305981_prof);
>>>>>>> 305a5c83807d551c85ea4575bf6b100c3f8213a3

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 36,  138 => 33,  133 => 32,  131 => 31,  128 => 30,  114 => 29,  111 => 28,  105 => 26,  98 => 24,  97 => 23,  96 => 22,  95 => 21,  94 => 20,  93 => 19,  92 => 18,  90 => 17,  87 => 16,  70 => 15,  66 => 14,  63 => 13,  58 => 11,  53 => 9,  45 => 8,  39 => 5,  35 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- START of Symfony Web Debug Toolbar -->
{% if 'normal' != position %}
    <div id=\"sfMiniToolbar-{{ token }}\" class=\"sf-minitoolbar\" data-no-turbolink>
        <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-{{ token }}\" accesskey=\"D\">
            {{ include('@WebProfiler/Icon/symfony.svg') }}
        </a>
    </div>
    <style{% if csp_style_nonce %} nonce=\"{{ csp_style_nonce }}\"{% endif %}>
        {{ include('@WebProfiler/Profiler/toolbar.css.twig', { 'position': position, 'floatable': true }) }}
    </style>
    <div id=\"sfToolbarClearer-{{ token }}\" class=\"sf-toolbar-clearer\"></div>
{% endif %}

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

    {% if 'normal' != position %}
        <a class=\"hide-button\" id=\"sfToolbarHideButton-{{ token }}\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
            {{ include('@WebProfiler/Icon/close.svg') }}
        </a>
    {% endif %}
</div>
<!-- END of Symfony Web Debug Toolbar -->
", "@WebProfiler/Profiler/toolbar.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar.html.twig");
    }
}
