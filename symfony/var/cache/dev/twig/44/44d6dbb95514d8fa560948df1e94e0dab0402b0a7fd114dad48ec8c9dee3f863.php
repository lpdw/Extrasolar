<?php

/* base.html.twig */
class __TwigTemplate_5f636d84497f4c15dd364cbc3f8627b9126f4eb336a4969309fd8e18dd7fb075 extends Twig_Template
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
        $__internal_2738811b01484e7fa2be8b32557bbaa924a8698249493e1b800a7d69f50ef560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2738811b01484e7fa2be8b32557bbaa924a8698249493e1b800a7d69f50ef560->enter($__internal_2738811b01484e7fa2be8b32557bbaa924a8698249493e1b800a7d69f50ef560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f853b206fb689efe95c7240656f4ca9eed7291edbceba91f7d3574223fe86265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f853b206fb689efe95c7240656f4ca9eed7291edbceba91f7d3574223fe86265->enter($__internal_f853b206fb689efe95c7240656f4ca9eed7291edbceba91f7d3574223fe86265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2738811b01484e7fa2be8b32557bbaa924a8698249493e1b800a7d69f50ef560->leave($__internal_2738811b01484e7fa2be8b32557bbaa924a8698249493e1b800a7d69f50ef560_prof);

        
        $__internal_f853b206fb689efe95c7240656f4ca9eed7291edbceba91f7d3574223fe86265->leave($__internal_f853b206fb689efe95c7240656f4ca9eed7291edbceba91f7d3574223fe86265_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_313cc6db0afba2589ed374cd101d796d91a55af14083fc9c65c317ec737b763e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313cc6db0afba2589ed374cd101d796d91a55af14083fc9c65c317ec737b763e->enter($__internal_313cc6db0afba2589ed374cd101d796d91a55af14083fc9c65c317ec737b763e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c68f04f22cf88c545688a36dcd270bf9a65ea3ffd2a5ce0d0178a99e3961044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c68f04f22cf88c545688a36dcd270bf9a65ea3ffd2a5ce0d0178a99e3961044->enter($__internal_3c68f04f22cf88c545688a36dcd270bf9a65ea3ffd2a5ce0d0178a99e3961044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3c68f04f22cf88c545688a36dcd270bf9a65ea3ffd2a5ce0d0178a99e3961044->leave($__internal_3c68f04f22cf88c545688a36dcd270bf9a65ea3ffd2a5ce0d0178a99e3961044_prof);

        
        $__internal_313cc6db0afba2589ed374cd101d796d91a55af14083fc9c65c317ec737b763e->leave($__internal_313cc6db0afba2589ed374cd101d796d91a55af14083fc9c65c317ec737b763e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17d4d339fe6559dc099898d8feb76f5ac075c4927b6786ab81a5890c2ed88b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d4d339fe6559dc099898d8feb76f5ac075c4927b6786ab81a5890c2ed88b45->enter($__internal_17d4d339fe6559dc099898d8feb76f5ac075c4927b6786ab81a5890c2ed88b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f57b0c7d28af0351edc59ad44f5063269476e83e3cd5664cb0c9d85011eb2a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f57b0c7d28af0351edc59ad44f5063269476e83e3cd5664cb0c9d85011eb2a31->enter($__internal_f57b0c7d28af0351edc59ad44f5063269476e83e3cd5664cb0c9d85011eb2a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f57b0c7d28af0351edc59ad44f5063269476e83e3cd5664cb0c9d85011eb2a31->leave($__internal_f57b0c7d28af0351edc59ad44f5063269476e83e3cd5664cb0c9d85011eb2a31_prof);

        
        $__internal_17d4d339fe6559dc099898d8feb76f5ac075c4927b6786ab81a5890c2ed88b45->leave($__internal_17d4d339fe6559dc099898d8feb76f5ac075c4927b6786ab81a5890c2ed88b45_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0bb502f1ab06acdd13f0eff9fea2bdafa4203a665c937bbf833f0e368b97de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0bb502f1ab06acdd13f0eff9fea2bdafa4203a665c937bbf833f0e368b97de0->enter($__internal_c0bb502f1ab06acdd13f0eff9fea2bdafa4203a665c937bbf833f0e368b97de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9c9f2e5e506ee00c85be0e17d117754121e7481a853d131f91b9fd9200c0f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c9f2e5e506ee00c85be0e17d117754121e7481a853d131f91b9fd9200c0f91->enter($__internal_f9c9f2e5e506ee00c85be0e17d117754121e7481a853d131f91b9fd9200c0f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9c9f2e5e506ee00c85be0e17d117754121e7481a853d131f91b9fd9200c0f91->leave($__internal_f9c9f2e5e506ee00c85be0e17d117754121e7481a853d131f91b9fd9200c0f91_prof);

        
        $__internal_c0bb502f1ab06acdd13f0eff9fea2bdafa4203a665c937bbf833f0e368b97de0->leave($__internal_c0bb502f1ab06acdd13f0eff9fea2bdafa4203a665c937bbf833f0e368b97de0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0035a9ba1078a573c99c4f7abab5c6f47d8cdc4be9b7a8af0d24983dea464de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0035a9ba1078a573c99c4f7abab5c6f47d8cdc4be9b7a8af0d24983dea464de->enter($__internal_d0035a9ba1078a573c99c4f7abab5c6f47d8cdc4be9b7a8af0d24983dea464de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5aa20d600a2235dfb7251d44d2ea32ab7e1c7eb205f713c90947e776180221f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa20d600a2235dfb7251d44d2ea32ab7e1c7eb205f713c90947e776180221f3->enter($__internal_5aa20d600a2235dfb7251d44d2ea32ab7e1c7eb205f713c90947e776180221f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5aa20d600a2235dfb7251d44d2ea32ab7e1c7eb205f713c90947e776180221f3->leave($__internal_5aa20d600a2235dfb7251d44d2ea32ab7e1c7eb205f713c90947e776180221f3_prof);

        
        $__internal_d0035a9ba1078a573c99c4f7abab5c6f47d8cdc4be9b7a8af0d24983dea464de->leave($__internal_d0035a9ba1078a573c99c4f7abab5c6f47d8cdc4be9b7a8af0d24983dea464de_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "base.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/app/Resources/views/base.html.twig");
    }
}
