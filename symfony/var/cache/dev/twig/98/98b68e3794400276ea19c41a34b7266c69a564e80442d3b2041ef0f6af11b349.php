<?php

/* default/visualisation.html.twig */
class __TwigTemplate_b65f24683505f29aee37a97cc25cb144b99d64acb20776a2b3736d9f3eba8ade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/visualisation.html.twig", 1);
        $this->blocks = array(
            'solarsystem' => array($this, 'block_solarsystem'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53f223f79eaea2dd26734ecb21dc94af57836244961ff23cb61cf51c4f25f0d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f223f79eaea2dd26734ecb21dc94af57836244961ff23cb61cf51c4f25f0d3->enter($__internal_53f223f79eaea2dd26734ecb21dc94af57836244961ff23cb61cf51c4f25f0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/visualisation.html.twig"));

        $__internal_efccc0ba4782610500f795ea7a6c2a048347ab6ee1013a845ca77067bd3e8a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efccc0ba4782610500f795ea7a6c2a048347ab6ee1013a845ca77067bd3e8a33->enter($__internal_efccc0ba4782610500f795ea7a6c2a048347ab6ee1013a845ca77067bd3e8a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/visualisation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53f223f79eaea2dd26734ecb21dc94af57836244961ff23cb61cf51c4f25f0d3->leave($__internal_53f223f79eaea2dd26734ecb21dc94af57836244961ff23cb61cf51c4f25f0d3_prof);

        
        $__internal_efccc0ba4782610500f795ea7a6c2a048347ab6ee1013a845ca77067bd3e8a33->leave($__internal_efccc0ba4782610500f795ea7a6c2a048347ab6ee1013a845ca77067bd3e8a33_prof);

    }

    // line 2
    public function block_solarsystem($context, array $blocks = array())
    {
        $__internal_a05aedc5102a5570f086d27daed87be274c4d235799d12bbe506486cb5f47638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05aedc5102a5570f086d27daed87be274c4d235799d12bbe506486cb5f47638->enter($__internal_a05aedc5102a5570f086d27daed87be274c4d235799d12bbe506486cb5f47638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "solarsystem"));

        $__internal_5d53a87c24b9a041c8f2d573b6436afca042aedad0576f072549be9f5af90b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d53a87c24b9a041c8f2d573b6436afca042aedad0576f072549be9f5af90b27->enter($__internal_5d53a87c24b9a041c8f2d573b6436afca042aedad0576f072549be9f5af90b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "solarsystem"));

        // line 3
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge;chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable = no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <title dir=\"ltr\">System Solaire</title>
    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    </body>
</html>
";
        
        $__internal_5d53a87c24b9a041c8f2d573b6436afca042aedad0576f072549be9f5af90b27->leave($__internal_5d53a87c24b9a041c8f2d573b6436afca042aedad0576f072549be9f5af90b27_prof);

        
        $__internal_a05aedc5102a5570f086d27daed87be274c4d235799d12bbe506486cb5f47638->leave($__internal_a05aedc5102a5570f086d27daed87be274c4d235799d12bbe506486cb5f47638_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_45a21e72434c5d855b23bfc9af2251e8f2133aab69d85cb10fd355ff24c5274d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a21e72434c5d855b23bfc9af2251e8f2133aab69d85cb10fd355ff24c5274d->enter($__internal_45a21e72434c5d855b23bfc9af2251e8f2133aab69d85cb10fd355ff24c5274d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68aac2815fa86446e5830409d2d8c04fae6cd22441461cf773a1aeee32cea4b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68aac2815fa86446e5830409d2d8c04fae6cd22441461cf773a1aeee32cea4b4->enter($__internal_68aac2815fa86446e5830409d2d8c04fae6cd22441461cf773a1aeee32cea4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visualisation ";
        
        $__internal_68aac2815fa86446e5830409d2d8c04fae6cd22441461cf773a1aeee32cea4b4->leave($__internal_68aac2815fa86446e5830409d2d8c04fae6cd22441461cf773a1aeee32cea4b4_prof);

        
        $__internal_45a21e72434c5d855b23bfc9af2251e8f2133aab69d85cb10fd355ff24c5274d->leave($__internal_45a21e72434c5d855b23bfc9af2251e8f2133aab69d85cb10fd355ff24c5274d_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_144c11e7fbc79c549037656a1af704f7521dced3208877e062f57ee6c8fc78da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144c11e7fbc79c549037656a1af704f7521dced3208877e062f57ee6c8fc78da->enter($__internal_144c11e7fbc79c549037656a1af704f7521dced3208877e062f57ee6c8fc78da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fc84318b9a115a219442d1e645b923b0a84b3915ae60d20227a1f8183c836009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc84318b9a115a219442d1e645b923b0a84b3915ae60d20227a1f8183c836009->enter($__internal_fc84318b9a115a219442d1e645b923b0a84b3915ae60d20227a1f8183c836009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "
        ";
        
        $__internal_fc84318b9a115a219442d1e645b923b0a84b3915ae60d20227a1f8183c836009->leave($__internal_fc84318b9a115a219442d1e645b923b0a84b3915ae60d20227a1f8183c836009_prof);

        
        $__internal_144c11e7fbc79c549037656a1af704f7521dced3208877e062f57ee6c8fc78da->leave($__internal_144c11e7fbc79c549037656a1af704f7521dced3208877e062f57ee6c8fc78da_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_f091e51653223c8c205fa6910583ae898b19e1977ec50802bf5c704ece9ed235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f091e51653223c8c205fa6910583ae898b19e1977ec50802bf5c704ece9ed235->enter($__internal_f091e51653223c8c205fa6910583ae898b19e1977ec50802bf5c704ece9ed235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0a02558ad69a82c85cbfd837eeafeb438ea1c7d8432174a825c7fc926748b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a02558ad69a82c85cbfd837eeafeb438ea1c7d8432174a825c7fc926748b01->enter($__internal_e0a02558ad69a82c85cbfd837eeafeb438ea1c7d8432174a825c7fc926748b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "

        </body>

      ";
        
        $__internal_e0a02558ad69a82c85cbfd837eeafeb438ea1c7d8432174a825c7fc926748b01->leave($__internal_e0a02558ad69a82c85cbfd837eeafeb438ea1c7d8432174a825c7fc926748b01_prof);

        
        $__internal_f091e51653223c8c205fa6910583ae898b19e1977ec50802bf5c704ece9ed235->leave($__internal_f091e51653223c8c205fa6910583ae898b19e1977ec50802bf5c704ece9ed235_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3430154ba067de91516dce9e1e596d0b2132cf0659d3090b03a10278ff68a107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3430154ba067de91516dce9e1e596d0b2132cf0659d3090b03a10278ff68a107->enter($__internal_3430154ba067de91516dce9e1e596d0b2132cf0659d3090b03a10278ff68a107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2ef9443755a2ea7f29c04863fdcdfb881fd1843c93152ee453d18121d564b3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef9443755a2ea7f29c04863fdcdfb881fd1843c93152ee453d18121d564b3c3->enter($__internal_2ef9443755a2ea7f29c04863fdcdfb881fd1843c93152ee453d18121d564b3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "
      ";
        
        $__internal_2ef9443755a2ea7f29c04863fdcdfb881fd1843c93152ee453d18121d564b3c3->leave($__internal_2ef9443755a2ea7f29c04863fdcdfb881fd1843c93152ee453d18121d564b3c3_prof);

        
        $__internal_3430154ba067de91516dce9e1e596d0b2132cf0659d3090b03a10278ff68a107->leave($__internal_3430154ba067de91516dce9e1e596d0b2132cf0659d3090b03a10278ff68a107_prof);

    }

    public function getTemplateName()
    {
        return "default/visualisation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 26,  155 => 25,  141 => 20,  132 => 19,  121 => 9,  112 => 8,  94 => 7,  82 => 28,  79 => 25,  77 => 19,  65 => 11,  63 => 8,  59 => 7,  53 => 3,  44 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block solarsystem %}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Visualisation {% endblock %}</title>
        {% block stylesheets %}

        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge;chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable = no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <title dir=\"ltr\">System Solaire</title>
    </head>
    <body>
        {% block body %}


        </body>

      {% endblock %}
        {% block javascripts %}

      {% endblock %}
    </body>
</html>
{% endblock %}
", "default/visualisation.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/app/Resources/views/default/visualisation.html.twig");
    }
}
