<?php

/* default/index.html.twig */
class __TwigTemplate_95037066e25c238379d2683ef141d26d9c743b9e8fa6f9f69f4798984d6b1243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e1ff2c5f825c231501bdd019e0a28e835c78fa8791084b38e72f9e711a3a40c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1ff2c5f825c231501bdd019e0a28e835c78fa8791084b38e72f9e711a3a40c->enter($__internal_2e1ff2c5f825c231501bdd019e0a28e835c78fa8791084b38e72f9e711a3a40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_4096cc58359870d639caf3d4766e457b400f6be2670e145a1b1948e5879ff9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4096cc58359870d639caf3d4766e457b400f6be2670e145a1b1948e5879ff9e5->enter($__internal_4096cc58359870d639caf3d4766e457b400f6be2670e145a1b1948e5879ff9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e1ff2c5f825c231501bdd019e0a28e835c78fa8791084b38e72f9e711a3a40c->leave($__internal_2e1ff2c5f825c231501bdd019e0a28e835c78fa8791084b38e72f9e711a3a40c_prof);

        
        $__internal_4096cc58359870d639caf3d4766e457b400f6be2670e145a1b1948e5879ff9e5->leave($__internal_4096cc58359870d639caf3d4766e457b400f6be2670e145a1b1948e5879ff9e5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a023db30819af32e40d0c0aa2eac316ba74da75c5bd8d54f09c8a8101e23e72b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a023db30819af32e40d0c0aa2eac316ba74da75c5bd8d54f09c8a8101e23e72b->enter($__internal_a023db30819af32e40d0c0aa2eac316ba74da75c5bd8d54f09c8a8101e23e72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26745e989ae3fda9bd86ac14ef11482057574ac52bd12e110a5e6b00b01d03a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26745e989ae3fda9bd86ac14ef11482057574ac52bd12e110a5e6b00b01d03a5->enter($__internal_26745e989ae3fda9bd86ac14ef11482057574ac52bd12e110a5e6b00b01d03a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->loadTemplate("components/solarsystem.html.twig", "default/index.html.twig", 3)->display($context);
        // line 4
        echo "
";
        
        $__internal_26745e989ae3fda9bd86ac14ef11482057574ac52bd12e110a5e6b00b01d03a5->leave($__internal_26745e989ae3fda9bd86ac14ef11482057574ac52bd12e110a5e6b00b01d03a5_prof);

        
        $__internal_a023db30819af32e40d0c0aa2eac316ba74da75c5bd8d54f09c8a8101e23e72b->leave($__internal_a023db30819af32e40d0c0aa2eac316ba74da75c5bd8d54f09c8a8101e23e72b_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
{% block body %}
{% include 'components/solarsystem.html.twig'%}

{% endblock %}
", "default/index.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/app/Resources/views/default/index.html.twig");
    }
}
