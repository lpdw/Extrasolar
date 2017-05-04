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
        $__internal_3a7c6d36b9969bf0b35e9f0f7d2c3213668fce40964a7a0653a6f21b1b46b926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a7c6d36b9969bf0b35e9f0f7d2c3213668fce40964a7a0653a6f21b1b46b926->enter($__internal_3a7c6d36b9969bf0b35e9f0f7d2c3213668fce40964a7a0653a6f21b1b46b926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1377f2af7887401fb5b47311a995c884d870894b09a46ee840fba2d79de4e803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1377f2af7887401fb5b47311a995c884d870894b09a46ee840fba2d79de4e803->enter($__internal_1377f2af7887401fb5b47311a995c884d870894b09a46ee840fba2d79de4e803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a7c6d36b9969bf0b35e9f0f7d2c3213668fce40964a7a0653a6f21b1b46b926->leave($__internal_3a7c6d36b9969bf0b35e9f0f7d2c3213668fce40964a7a0653a6f21b1b46b926_prof);

        
        $__internal_1377f2af7887401fb5b47311a995c884d870894b09a46ee840fba2d79de4e803->leave($__internal_1377f2af7887401fb5b47311a995c884d870894b09a46ee840fba2d79de4e803_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64d4eb52c680d0d71eaab39763051c062539d7b7baa218d7b4979bb2d26248d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d4eb52c680d0d71eaab39763051c062539d7b7baa218d7b4979bb2d26248d3->enter($__internal_64d4eb52c680d0d71eaab39763051c062539d7b7baa218d7b4979bb2d26248d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_80ded8e26fe2bc21247fc7caae0bdc00199ca8a7b30e9ff3fb9f4c134072398e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ded8e26fe2bc21247fc7caae0bdc00199ca8a7b30e9ff3fb9f4c134072398e->enter($__internal_80ded8e26fe2bc21247fc7caae0bdc00199ca8a7b30e9ff3fb9f4c134072398e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_80ded8e26fe2bc21247fc7caae0bdc00199ca8a7b30e9ff3fb9f4c134072398e->leave($__internal_80ded8e26fe2bc21247fc7caae0bdc00199ca8a7b30e9ff3fb9f4c134072398e_prof);

        
        $__internal_64d4eb52c680d0d71eaab39763051c062539d7b7baa218d7b4979bb2d26248d3->leave($__internal_64d4eb52c680d0d71eaab39763051c062539d7b7baa218d7b4979bb2d26248d3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_108b6f1b8c2686096e7c97d5a9f465332cf24fad56bfa1cd524ea85d35beef67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108b6f1b8c2686096e7c97d5a9f465332cf24fad56bfa1cd524ea85d35beef67->enter($__internal_108b6f1b8c2686096e7c97d5a9f465332cf24fad56bfa1cd524ea85d35beef67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_59ee3ec6f65d227011db8b5b2edad9c68d0ab840187c431a8a4c6c367cc79e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ee3ec6f65d227011db8b5b2edad9c68d0ab840187c431a8a4c6c367cc79e42->enter($__internal_59ee3ec6f65d227011db8b5b2edad9c68d0ab840187c431a8a4c6c367cc79e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_59ee3ec6f65d227011db8b5b2edad9c68d0ab840187c431a8a4c6c367cc79e42->leave($__internal_59ee3ec6f65d227011db8b5b2edad9c68d0ab840187c431a8a4c6c367cc79e42_prof);

        
        $__internal_108b6f1b8c2686096e7c97d5a9f465332cf24fad56bfa1cd524ea85d35beef67->leave($__internal_108b6f1b8c2686096e7c97d5a9f465332cf24fad56bfa1cd524ea85d35beef67_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c726ae8d0263c82a75e308fa3ff869f437b704856d0af2fb59abb299af6025f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c726ae8d0263c82a75e308fa3ff869f437b704856d0af2fb59abb299af6025f3->enter($__internal_c726ae8d0263c82a75e308fa3ff869f437b704856d0af2fb59abb299af6025f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0fb5d8ab6a3582e3549951ca04d2054fbcb1c62d19480be72a3348d89445c6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb5d8ab6a3582e3549951ca04d2054fbcb1c62d19480be72a3348d89445c6c6->enter($__internal_0fb5d8ab6a3582e3549951ca04d2054fbcb1c62d19480be72a3348d89445c6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0fb5d8ab6a3582e3549951ca04d2054fbcb1c62d19480be72a3348d89445c6c6->leave($__internal_0fb5d8ab6a3582e3549951ca04d2054fbcb1c62d19480be72a3348d89445c6c6_prof);

        
        $__internal_c726ae8d0263c82a75e308fa3ff869f437b704856d0af2fb59abb299af6025f3->leave($__internal_c726ae8d0263c82a75e308fa3ff869f437b704856d0af2fb59abb299af6025f3_prof);

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
