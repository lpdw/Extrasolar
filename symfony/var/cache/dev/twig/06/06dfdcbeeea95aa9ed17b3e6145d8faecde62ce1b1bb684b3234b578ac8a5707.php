<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eff1da6d2f623451a1dd082e6101fb005d01f274ff0c3875bedd0d5f4aff284b extends Twig_Template
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
        $__internal_7495ca29906b8ac3116e4db5b9eef12e17e89e36e3582d771d7cfb6a07ed76ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7495ca29906b8ac3116e4db5b9eef12e17e89e36e3582d771d7cfb6a07ed76ab->enter($__internal_7495ca29906b8ac3116e4db5b9eef12e17e89e36e3582d771d7cfb6a07ed76ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_84b2727693e109f5290b750eb6b16d272198e784667c7b87ed1f3930b402dee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b2727693e109f5290b750eb6b16d272198e784667c7b87ed1f3930b402dee0->enter($__internal_84b2727693e109f5290b750eb6b16d272198e784667c7b87ed1f3930b402dee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7495ca29906b8ac3116e4db5b9eef12e17e89e36e3582d771d7cfb6a07ed76ab->leave($__internal_7495ca29906b8ac3116e4db5b9eef12e17e89e36e3582d771d7cfb6a07ed76ab_prof);

        
        $__internal_84b2727693e109f5290b750eb6b16d272198e784667c7b87ed1f3930b402dee0->leave($__internal_84b2727693e109f5290b750eb6b16d272198e784667c7b87ed1f3930b402dee0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a32b662e40b8c0d90446401b1580798fc7b43cf071e956d9b0baaa470df71399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a32b662e40b8c0d90446401b1580798fc7b43cf071e956d9b0baaa470df71399->enter($__internal_a32b662e40b8c0d90446401b1580798fc7b43cf071e956d9b0baaa470df71399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_724c2f0ae1687808426a33d0cbd07cf3724de0ac5a194045f101c1bfd3203427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724c2f0ae1687808426a33d0cbd07cf3724de0ac5a194045f101c1bfd3203427->enter($__internal_724c2f0ae1687808426a33d0cbd07cf3724de0ac5a194045f101c1bfd3203427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_724c2f0ae1687808426a33d0cbd07cf3724de0ac5a194045f101c1bfd3203427->leave($__internal_724c2f0ae1687808426a33d0cbd07cf3724de0ac5a194045f101c1bfd3203427_prof);

        
        $__internal_a32b662e40b8c0d90446401b1580798fc7b43cf071e956d9b0baaa470df71399->leave($__internal_a32b662e40b8c0d90446401b1580798fc7b43cf071e956d9b0baaa470df71399_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_12efd4e54ede26b3b0c0d76e7c08b6cab91b298b4b01ea45e1f40da49c74488e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12efd4e54ede26b3b0c0d76e7c08b6cab91b298b4b01ea45e1f40da49c74488e->enter($__internal_12efd4e54ede26b3b0c0d76e7c08b6cab91b298b4b01ea45e1f40da49c74488e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ddf839bf34948ef4f552477e93158cc1fa66be313c7283f14868760f0fee044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ddf839bf34948ef4f552477e93158cc1fa66be313c7283f14868760f0fee044->enter($__internal_3ddf839bf34948ef4f552477e93158cc1fa66be313c7283f14868760f0fee044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3ddf839bf34948ef4f552477e93158cc1fa66be313c7283f14868760f0fee044->leave($__internal_3ddf839bf34948ef4f552477e93158cc1fa66be313c7283f14868760f0fee044_prof);

        
        $__internal_12efd4e54ede26b3b0c0d76e7c08b6cab91b298b4b01ea45e1f40da49c74488e->leave($__internal_12efd4e54ede26b3b0c0d76e7c08b6cab91b298b4b01ea45e1f40da49c74488e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_765c8d05903bb4df638c405b667b194a74ac2974f4384bab8155c0c2362376cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765c8d05903bb4df638c405b667b194a74ac2974f4384bab8155c0c2362376cc->enter($__internal_765c8d05903bb4df638c405b667b194a74ac2974f4384bab8155c0c2362376cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af9c0b3c9e3d7d2887a46727ff72b8f9495b66ee3f723a318c20033b2d277cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9c0b3c9e3d7d2887a46727ff72b8f9495b66ee3f723a318c20033b2d277cc1->enter($__internal_af9c0b3c9e3d7d2887a46727ff72b8f9495b66ee3f723a318c20033b2d277cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_af9c0b3c9e3d7d2887a46727ff72b8f9495b66ee3f723a318c20033b2d277cc1->leave($__internal_af9c0b3c9e3d7d2887a46727ff72b8f9495b66ee3f723a318c20033b2d277cc1_prof);

        
        $__internal_765c8d05903bb4df638c405b667b194a74ac2974f4384bab8155c0c2362376cc->leave($__internal_765c8d05903bb4df638c405b667b194a74ac2974f4384bab8155c0c2362376cc_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/lpdw/Desktop/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
