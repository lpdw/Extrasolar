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
        $__internal_d6b50289c7cdb2ccc9cc5a77010e9bc25b8d79c9160f036f49dfd27a0b2c07d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b50289c7cdb2ccc9cc5a77010e9bc25b8d79c9160f036f49dfd27a0b2c07d4->enter($__internal_d6b50289c7cdb2ccc9cc5a77010e9bc25b8d79c9160f036f49dfd27a0b2c07d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/visualisation.html.twig"));

        $__internal_5a1bd584874107cb9c204e6e0c25186d1d9ab064b1c260d567a1f2edd929bebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1bd584874107cb9c204e6e0c25186d1d9ab064b1c260d567a1f2edd929bebf->enter($__internal_5a1bd584874107cb9c204e6e0c25186d1d9ab064b1c260d567a1f2edd929bebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/visualisation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b50289c7cdb2ccc9cc5a77010e9bc25b8d79c9160f036f49dfd27a0b2c07d4->leave($__internal_d6b50289c7cdb2ccc9cc5a77010e9bc25b8d79c9160f036f49dfd27a0b2c07d4_prof);

        
        $__internal_5a1bd584874107cb9c204e6e0c25186d1d9ab064b1c260d567a1f2edd929bebf->leave($__internal_5a1bd584874107cb9c204e6e0c25186d1d9ab064b1c260d567a1f2edd929bebf_prof);

    }

    // line 2
    public function block_solarsystem($context, array $blocks = array())
    {
        $__internal_bcc84d6ae07798322c6d23e55b9b67d52ccf3d6455ff4f4f4541fcd77d1ecbdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc84d6ae07798322c6d23e55b9b67d52ccf3d6455ff4f4f4541fcd77d1ecbdb->enter($__internal_bcc84d6ae07798322c6d23e55b9b67d52ccf3d6455ff4f4f4541fcd77d1ecbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "solarsystem"));

        $__internal_f80fc1c4564ab0382d410168bc72a282d2d9a54d3b391e7329a300af53829935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80fc1c4564ab0382d410168bc72a282d2d9a54d3b391e7329a300af53829935->enter($__internal_f80fc1c4564ab0382d410168bc72a282d2d9a54d3b391e7329a300af53829935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "solarsystem"));

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
        // line 165
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 169
        echo "    </body>
</html>
";
        
        $__internal_f80fc1c4564ab0382d410168bc72a282d2d9a54d3b391e7329a300af53829935->leave($__internal_f80fc1c4564ab0382d410168bc72a282d2d9a54d3b391e7329a300af53829935_prof);

        
        $__internal_bcc84d6ae07798322c6d23e55b9b67d52ccf3d6455ff4f4f4541fcd77d1ecbdb->leave($__internal_bcc84d6ae07798322c6d23e55b9b67d52ccf3d6455ff4f4f4541fcd77d1ecbdb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_24790c2c7356d24ff6b13f0f5b61a8217fda6aa4f7ce17e91dd18f030106d1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24790c2c7356d24ff6b13f0f5b61a8217fda6aa4f7ce17e91dd18f030106d1fa->enter($__internal_24790c2c7356d24ff6b13f0f5b61a8217fda6aa4f7ce17e91dd18f030106d1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61a73d2c67e9d3983e55bbbfccb441a18e2cd9bfa72058ee6a153ca34dc5bfaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a73d2c67e9d3983e55bbbfccb441a18e2cd9bfa72058ee6a153ca34dc5bfaa->enter($__internal_61a73d2c67e9d3983e55bbbfccb441a18e2cd9bfa72058ee6a153ca34dc5bfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visualisation ";
        
        $__internal_61a73d2c67e9d3983e55bbbfccb441a18e2cd9bfa72058ee6a153ca34dc5bfaa->leave($__internal_61a73d2c67e9d3983e55bbbfccb441a18e2cd9bfa72058ee6a153ca34dc5bfaa_prof);

        
        $__internal_24790c2c7356d24ff6b13f0f5b61a8217fda6aa4f7ce17e91dd18f030106d1fa->leave($__internal_24790c2c7356d24ff6b13f0f5b61a8217fda6aa4f7ce17e91dd18f030106d1fa_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d88bead38413fdd290e4923c5dfcd3406e941bfa212b2064bed8e8c32e652f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88bead38413fdd290e4923c5dfcd3406e941bfa212b2064bed8e8c32e652f33->enter($__internal_d88bead38413fdd290e4923c5dfcd3406e941bfa212b2064bed8e8c32e652f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c19336e2b478e336aecf232c1984580a206063dbd36a16cf194a976ad37632a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19336e2b478e336aecf232c1984580a206063dbd36a16cf194a976ad37632a8->enter($__internal_c19336e2b478e336aecf232c1984580a206063dbd36a16cf194a976ad37632a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "          <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/styles.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_c19336e2b478e336aecf232c1984580a206063dbd36a16cf194a976ad37632a8->leave($__internal_c19336e2b478e336aecf232c1984580a206063dbd36a16cf194a976ad37632a8_prof);

        
        $__internal_d88bead38413fdd290e4923c5dfcd3406e941bfa212b2064bed8e8c32e652f33->leave($__internal_d88bead38413fdd290e4923c5dfcd3406e941bfa212b2064bed8e8c32e652f33_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_d13735da110465fe557fb0f844d0a72a7dc8da485ffa217eefff22a748fd7d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13735da110465fe557fb0f844d0a72a7dc8da485ffa217eefff22a748fd7d0b->enter($__internal_d13735da110465fe557fb0f844d0a72a7dc8da485ffa217eefff22a748fd7d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_147072df0201f0057de5feaf692a393dc126a9ac6e6bce9c666e5fc30699aac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147072df0201f0057de5feaf692a393dc126a9ac6e6bce9c666e5fc30699aac0->enter($__internal_147072df0201f0057de5feaf692a393dc126a9ac6e6bce9c666e5fc30699aac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "
        <body class=\"opening hide-UI view-2D zoom-large data-close controls-close\">
          <div id=\"navbar\">
            <a id=\"toggle-data\" href=\"#data\"><i class=\"icon-data\"></i>Data</a>
            <h1>System Solaire</h1>
            <a id=\"toggle-controls\" href=\"#controls\"><i class=\"icon-controls\"></i>Controls</a>
          </div>
          <div id=\"data\">
            <a class=\"sun\" title=\"sun\" href=\"#sunspeed\">Sun</a>
            <a class=\"mercury\" title=\"mercury\" href=\"#mercuryspeed\">Mercury</a>
            <a class=\"venus\" title=\"venus\" href=\"#venusspeed\">Venus</a>
            <a class=\"earth active\" title=\"earth\" href=\"#earthspeed\">Earth</a>
            <a class=\"mars\" title=\"mars\" href=\"#marsspeed\">Mars</a>
            <a class=\"jupiter\" title=\"jupiter\" href=\"#jupiterspeed\">Jupiter</a>
            <a class=\"saturn\" title=\"saturn\" href=\"#saturnspeed\">Saturn</a>
            <a class=\"uranus\" title=\"uranus\" href=\"#uranusspeed\">Uranus</a>
            <a class=\"neptune\" title=\"neptune\" href=\"#neptunespeed\">Neptune</a>
          </div>
          <div id=\"controls\">
            <label class=\"set-view\">
              <input type=\"checkbox\">
            </label>
            <label class=\"set-zoom\">
              <input type=\"checkbox\">
            </label>
            <label>
              <input type=\"radio\" class=\"set-speed\" name=\"scale\" checked>
              <span>Speed</span>
            </label>
            <label>
              <input type=\"radio\" class=\"set-size\" name=\"scale\">
              <span>Size</span>
            </label>
            <label>
              <input type=\"radio\" class=\"set-distance\" name=\"scale\">
              <span>Distance</span>
            </label>
          </div>
          <div id=\"universe\" class=\"scale-stretched\">
            <div id=\"galaxy\">
              <div id=\"solar-system\" class=\"earth\">
                <div id=\"mercury\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Mercury</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"venus\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Venus</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"earth\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"orbit\">
                      <div class=\"pos\">
                        <div class=\"moon\"></div>
                      </div>
                    </div>
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Earth</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"mars\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Mars</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"jupiter\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Jupiter</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"saturn\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <div class=\"ring\"></div>
                      <dl class=\"infos\">
                        <dt>Saturn</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"uranus\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Uranus</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"sun\">
                  <dl class=\"infos\">
                    <dt>Sun</dt>
                    <dd><span></span></dd>
                  </dl>
                </div>
                <div id=\"neptune\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Neptune</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
          <script type=\"text/javascript\">
          if (typeof jQuery == 'undefined') {
            document.write(unescape(\"%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E\"));
          }
          </script>
        </body>

      ";
        
        $__internal_147072df0201f0057de5feaf692a393dc126a9ac6e6bce9c666e5fc30699aac0->leave($__internal_147072df0201f0057de5feaf692a393dc126a9ac6e6bce9c666e5fc30699aac0_prof);

        
        $__internal_d13735da110465fe557fb0f844d0a72a7dc8da485ffa217eefff22a748fd7d0b->leave($__internal_d13735da110465fe557fb0f844d0a72a7dc8da485ffa217eefff22a748fd7d0b_prof);

    }

    // line 165
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65c1a4e428471df9fee61aa366155d86fabcf7bf73fc1ca12f1d8d41603b3c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c1a4e428471df9fee61aa366155d86fabcf7bf73fc1ca12f1d8d41603b3c1a->enter($__internal_65c1a4e428471df9fee61aa366155d86fabcf7bf73fc1ca12f1d8d41603b3c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_65d503db4bf29be01be9612185aa40ae01eb5213a4fae6cdbde212dca16c5e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d503db4bf29be01be9612185aa40ae01eb5213a4fae6cdbde212dca16c5e90->enter($__internal_65d503db4bf29be01be9612185aa40ae01eb5213a4fae6cdbde212dca16c5e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 166
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/prefixfree.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.min.js"), "html", null, true);
        echo "\"></script>
      ";
        
        $__internal_65d503db4bf29be01be9612185aa40ae01eb5213a4fae6cdbde212dca16c5e90->leave($__internal_65d503db4bf29be01be9612185aa40ae01eb5213a4fae6cdbde212dca16c5e90_prof);

        
        $__internal_65c1a4e428471df9fee61aa366155d86fabcf7bf73fc1ca12f1d8d41603b3c1a->leave($__internal_65c1a4e428471df9fee61aa366155d86fabcf7bf73fc1ca12f1d8d41603b3c1a_prof);

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
        return array (  311 => 167,  306 => 166,  297 => 165,  143 => 20,  134 => 19,  121 => 9,  112 => 8,  94 => 7,  82 => 169,  79 => 165,  77 => 19,  65 => 11,  63 => 8,  59 => 7,  53 => 3,  44 => 2,  11 => 1,);
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
          <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/styles.css') }}\">
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

        <body class=\"opening hide-UI view-2D zoom-large data-close controls-close\">
          <div id=\"navbar\">
            <a id=\"toggle-data\" href=\"#data\"><i class=\"icon-data\"></i>Data</a>
            <h1>System Solaire</h1>
            <a id=\"toggle-controls\" href=\"#controls\"><i class=\"icon-controls\"></i>Controls</a>
          </div>
          <div id=\"data\">
            <a class=\"sun\" title=\"sun\" href=\"#sunspeed\">Sun</a>
            <a class=\"mercury\" title=\"mercury\" href=\"#mercuryspeed\">Mercury</a>
            <a class=\"venus\" title=\"venus\" href=\"#venusspeed\">Venus</a>
            <a class=\"earth active\" title=\"earth\" href=\"#earthspeed\">Earth</a>
            <a class=\"mars\" title=\"mars\" href=\"#marsspeed\">Mars</a>
            <a class=\"jupiter\" title=\"jupiter\" href=\"#jupiterspeed\">Jupiter</a>
            <a class=\"saturn\" title=\"saturn\" href=\"#saturnspeed\">Saturn</a>
            <a class=\"uranus\" title=\"uranus\" href=\"#uranusspeed\">Uranus</a>
            <a class=\"neptune\" title=\"neptune\" href=\"#neptunespeed\">Neptune</a>
          </div>
          <div id=\"controls\">
            <label class=\"set-view\">
              <input type=\"checkbox\">
            </label>
            <label class=\"set-zoom\">
              <input type=\"checkbox\">
            </label>
            <label>
              <input type=\"radio\" class=\"set-speed\" name=\"scale\" checked>
              <span>Speed</span>
            </label>
            <label>
              <input type=\"radio\" class=\"set-size\" name=\"scale\">
              <span>Size</span>
            </label>
            <label>
              <input type=\"radio\" class=\"set-distance\" name=\"scale\">
              <span>Distance</span>
            </label>
          </div>
          <div id=\"universe\" class=\"scale-stretched\">
            <div id=\"galaxy\">
              <div id=\"solar-system\" class=\"earth\">
                <div id=\"mercury\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Mercury</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"venus\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Venus</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"earth\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"orbit\">
                      <div class=\"pos\">
                        <div class=\"moon\"></div>
                      </div>
                    </div>
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Earth</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"mars\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Mars</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"jupiter\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Jupiter</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"saturn\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <div class=\"ring\"></div>
                      <dl class=\"infos\">
                        <dt>Saturn</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"uranus\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Uranus</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"sun\">
                  <dl class=\"infos\">
                    <dt>Sun</dt>
                    <dd><span></span></dd>
                  </dl>
                </div>
                <div id=\"neptune\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Neptune</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
          <script type=\"text/javascript\">
          if (typeof jQuery == 'undefined') {
            document.write(unescape(\"%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E\"));
          }
          </script>
        </body>

      {% endblock %}
        {% block javascripts %}
        <script src=\"{{ asset('js/prefixfree.min.js') }}\"></script>
        <script src=\"{{ asset('js/scripts.min.js') }}\"></script>
      {% endblock %}
    </body>
</html>
{% endblock %}
", "default/visualisation.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/app/Resources/views/default/visualisation.html.twig");
    }
}
