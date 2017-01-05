<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_81faf4f81c52739da9092b151a38cfefbcf161af21a8f60ae4983768ff068d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e811ff2c0d0f7e7f61e6d38b71e17a4171a582643b9cd5771819131fc4ad3fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e811ff2c0d0f7e7f61e6d38b71e17a4171a582643b9cd5771819131fc4ad3fc2->enter($__internal_e811ff2c0d0f7e7f61e6d38b71e17a4171a582643b9cd5771819131fc4ad3fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4751ee04440d13e064f296f6816ecc03ddd1cef8f11d64c2ff1005fb998a76ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4751ee04440d13e064f296f6816ecc03ddd1cef8f11d64c2ff1005fb998a76ad->enter($__internal_4751ee04440d13e064f296f6816ecc03ddd1cef8f11d64c2ff1005fb998a76ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e811ff2c0d0f7e7f61e6d38b71e17a4171a582643b9cd5771819131fc4ad3fc2->leave($__internal_e811ff2c0d0f7e7f61e6d38b71e17a4171a582643b9cd5771819131fc4ad3fc2_prof);

        
        $__internal_4751ee04440d13e064f296f6816ecc03ddd1cef8f11d64c2ff1005fb998a76ad->leave($__internal_4751ee04440d13e064f296f6816ecc03ddd1cef8f11d64c2ff1005fb998a76ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ff6c72a92b5c7f8cd9ceb2828572b44063752350849caf54e1b85932733d6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff6c72a92b5c7f8cd9ceb2828572b44063752350849caf54e1b85932733d6f4->enter($__internal_1ff6c72a92b5c7f8cd9ceb2828572b44063752350849caf54e1b85932733d6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aeef6aec19d376b113e6a90a5ab515075296e071fe4a1e6e3294940a203d6cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeef6aec19d376b113e6a90a5ab515075296e071fe4a1e6e3294940a203d6cfd->enter($__internal_aeef6aec19d376b113e6a90a5ab515075296e071fe4a1e6e3294940a203d6cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_aeef6aec19d376b113e6a90a5ab515075296e071fe4a1e6e3294940a203d6cfd->leave($__internal_aeef6aec19d376b113e6a90a5ab515075296e071fe4a1e6e3294940a203d6cfd_prof);

        
        $__internal_1ff6c72a92b5c7f8cd9ceb2828572b44063752350849caf54e1b85932733d6f4->leave($__internal_1ff6c72a92b5c7f8cd9ceb2828572b44063752350849caf54e1b85932733d6f4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_edd5bed63394a36d214e6d1ff7a740ae107ec202a3c2e332e26e815aa69a2aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edd5bed63394a36d214e6d1ff7a740ae107ec202a3c2e332e26e815aa69a2aa9->enter($__internal_edd5bed63394a36d214e6d1ff7a740ae107ec202a3c2e332e26e815aa69a2aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f670968f44d19d8c4697fa3deb28eb6089a9169f854b752c24d21bcb4d534a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f670968f44d19d8c4697fa3deb28eb6089a9169f854b752c24d21bcb4d534a06->enter($__internal_f670968f44d19d8c4697fa3deb28eb6089a9169f854b752c24d21bcb4d534a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f670968f44d19d8c4697fa3deb28eb6089a9169f854b752c24d21bcb4d534a06->leave($__internal_f670968f44d19d8c4697fa3deb28eb6089a9169f854b752c24d21bcb4d534a06_prof);

        
        $__internal_edd5bed63394a36d214e6d1ff7a740ae107ec202a3c2e332e26e815aa69a2aa9->leave($__internal_edd5bed63394a36d214e6d1ff7a740ae107ec202a3c2e332e26e815aa69a2aa9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b21a9f027190bc284cf4106d2cbea8cb8a2cdcf9f669070cdb57d19648539d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b21a9f027190bc284cf4106d2cbea8cb8a2cdcf9f669070cdb57d19648539d6->enter($__internal_5b21a9f027190bc284cf4106d2cbea8cb8a2cdcf9f669070cdb57d19648539d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d6b46e5487f8a046e51c0afdbed56acf5d9f2adce56d53de50542157c3d798a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6b46e5487f8a046e51c0afdbed56acf5d9f2adce56d53de50542157c3d798a->enter($__internal_0d6b46e5487f8a046e51c0afdbed56acf5d9f2adce56d53de50542157c3d798a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0d6b46e5487f8a046e51c0afdbed56acf5d9f2adce56d53de50542157c3d798a->leave($__internal_0d6b46e5487f8a046e51c0afdbed56acf5d9f2adce56d53de50542157c3d798a_prof);

        
        $__internal_5b21a9f027190bc284cf4106d2cbea8cb8a2cdcf9f669070cdb57d19648539d6->leave($__internal_5b21a9f027190bc284cf4106d2cbea8cb8a2cdcf9f669070cdb57d19648539d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
