<?php

/* item.html.twig */
class __TwigTemplate_91ff25641d3671259afdb51167e30872072f8141349bf050251401c9e4c2b415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        $this->loadTemplate("item.html.twig", "item.html.twig", 4, "1608165276")->display($context);
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/blog.css", 1 => 103), "method");
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  26 => 1,  22 => 4,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheets %}
\t{% do assets.addCss('theme://css/blog.css', 103) %}
{% endblock %}
{% embed 'partials/base-internal.html.twig' %}

\t{% block content %}
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t    {% include 'partials/blog_item_read.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "item.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_91ff25641d3671259afdb51167e30872072f8141349bf050251401c9e4c2b415_1608165276 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("partials/base-internal.html.twig", "item.html.twig", 4);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base-internal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t    ";
        // line 9
        $this->loadTemplate("partials/blog_item_read.html.twig", "item.html.twig", 9)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "truncate" => false)));
        // line 10
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 10,  109 => 9,  105 => 7,  102 => 6,  85 => 4,  29 => 2,  26 => 1,  22 => 4,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheets %}
\t{% do assets.addCss('theme://css/blog.css', 103) %}
{% endblock %}
{% embed 'partials/base-internal.html.twig' %}

\t{% block content %}
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t    {% include 'partials/blog_item_read.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "item.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/item.html.twig");
    }
}
