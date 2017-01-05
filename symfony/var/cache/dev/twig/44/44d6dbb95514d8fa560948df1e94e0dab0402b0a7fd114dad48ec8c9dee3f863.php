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
        $__internal_1e3e3fc416e9eeb098271345ce6f529b2f3c7c5f67b62f495540a8ecfa68a282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3e3fc416e9eeb098271345ce6f529b2f3c7c5f67b62f495540a8ecfa68a282->enter($__internal_1e3e3fc416e9eeb098271345ce6f529b2f3c7c5f67b62f495540a8ecfa68a282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3850dab13ff4d72cdd02163c1f37bbce98d11496d57a649c3c2731f753fbf32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3850dab13ff4d72cdd02163c1f37bbce98d11496d57a649c3c2731f753fbf32c->enter($__internal_3850dab13ff4d72cdd02163c1f37bbce98d11496d57a649c3c2731f753fbf32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1e3e3fc416e9eeb098271345ce6f529b2f3c7c5f67b62f495540a8ecfa68a282->leave($__internal_1e3e3fc416e9eeb098271345ce6f529b2f3c7c5f67b62f495540a8ecfa68a282_prof);

        
        $__internal_3850dab13ff4d72cdd02163c1f37bbce98d11496d57a649c3c2731f753fbf32c->leave($__internal_3850dab13ff4d72cdd02163c1f37bbce98d11496d57a649c3c2731f753fbf32c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_069df5678b7a5e7ce86e033d200cf5e61e41a3faca28027db879e29723d73c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069df5678b7a5e7ce86e033d200cf5e61e41a3faca28027db879e29723d73c2b->enter($__internal_069df5678b7a5e7ce86e033d200cf5e61e41a3faca28027db879e29723d73c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91141d4820c91490ae1633b2aed7499f8e0315ac2351863889b2ba28952a30f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91141d4820c91490ae1633b2aed7499f8e0315ac2351863889b2ba28952a30f7->enter($__internal_91141d4820c91490ae1633b2aed7499f8e0315ac2351863889b2ba28952a30f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_91141d4820c91490ae1633b2aed7499f8e0315ac2351863889b2ba28952a30f7->leave($__internal_91141d4820c91490ae1633b2aed7499f8e0315ac2351863889b2ba28952a30f7_prof);

        
        $__internal_069df5678b7a5e7ce86e033d200cf5e61e41a3faca28027db879e29723d73c2b->leave($__internal_069df5678b7a5e7ce86e033d200cf5e61e41a3faca28027db879e29723d73c2b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2221b14e31ad757dace3f8aeb9a4a9eee423812fd37d40f88d43c5a028879a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2221b14e31ad757dace3f8aeb9a4a9eee423812fd37d40f88d43c5a028879a9f->enter($__internal_2221b14e31ad757dace3f8aeb9a4a9eee423812fd37d40f88d43c5a028879a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c0f9e65734adaf7cc168b3807d3b0dd2335aa08ac391fd2344584400f82d8c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f9e65734adaf7cc168b3807d3b0dd2335aa08ac391fd2344584400f82d8c48->enter($__internal_c0f9e65734adaf7cc168b3807d3b0dd2335aa08ac391fd2344584400f82d8c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c0f9e65734adaf7cc168b3807d3b0dd2335aa08ac391fd2344584400f82d8c48->leave($__internal_c0f9e65734adaf7cc168b3807d3b0dd2335aa08ac391fd2344584400f82d8c48_prof);

        
        $__internal_2221b14e31ad757dace3f8aeb9a4a9eee423812fd37d40f88d43c5a028879a9f->leave($__internal_2221b14e31ad757dace3f8aeb9a4a9eee423812fd37d40f88d43c5a028879a9f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_394f30e846d9bb43bbf94294e895b511ac3e65570903c39fe91a76af528bc872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394f30e846d9bb43bbf94294e895b511ac3e65570903c39fe91a76af528bc872->enter($__internal_394f30e846d9bb43bbf94294e895b511ac3e65570903c39fe91a76af528bc872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb01bcc614c594ac523a9adb314b9e4c2c7cbf1750b472a891dfa2eedf2e81be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb01bcc614c594ac523a9adb314b9e4c2c7cbf1750b472a891dfa2eedf2e81be->enter($__internal_fb01bcc614c594ac523a9adb314b9e4c2c7cbf1750b472a891dfa2eedf2e81be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fb01bcc614c594ac523a9adb314b9e4c2c7cbf1750b472a891dfa2eedf2e81be->leave($__internal_fb01bcc614c594ac523a9adb314b9e4c2c7cbf1750b472a891dfa2eedf2e81be_prof);

        
        $__internal_394f30e846d9bb43bbf94294e895b511ac3e65570903c39fe91a76af528bc872->leave($__internal_394f30e846d9bb43bbf94294e895b511ac3e65570903c39fe91a76af528bc872_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf0991132be8b78171579f562847d1e65bc6cac0e73f53c559c0e627637bb71e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0991132be8b78171579f562847d1e65bc6cac0e73f53c559c0e627637bb71e->enter($__internal_cf0991132be8b78171579f562847d1e65bc6cac0e73f53c559c0e627637bb71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8f352947b78778d6b1cc1a654d09c9f1927e1954b92a0f5c1f0ad640ab8798ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f352947b78778d6b1cc1a654d09c9f1927e1954b92a0f5c1f0ad640ab8798ba->enter($__internal_8f352947b78778d6b1cc1a654d09c9f1927e1954b92a0f5c1f0ad640ab8798ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8f352947b78778d6b1cc1a654d09c9f1927e1954b92a0f5c1f0ad640ab8798ba->leave($__internal_8f352947b78778d6b1cc1a654d09c9f1927e1954b92a0f5c1f0ad640ab8798ba_prof);

        
        $__internal_cf0991132be8b78171579f562847d1e65bc6cac0e73f53c559c0e627637bb71e->leave($__internal_cf0991132be8b78171579f562847d1e65bc6cac0e73f53c559c0e627637bb71e_prof);

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
", "base.html.twig", "/Applications/MAMP/htdocs/symfony/app/Resources/views/base.html.twig");
    }
}
