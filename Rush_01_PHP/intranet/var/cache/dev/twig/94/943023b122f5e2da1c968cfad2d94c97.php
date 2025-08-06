<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* project/list.html.twig */
class __TwigTemplate_8d32f70af5153833874301b2d35a1c49 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/list.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " | Projects";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
";
        // line 7
        yield from $this->load("components/navbar.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "
<div class=\"edit_info\">
    <h1>Available Projects</h1>

    ";
        // line 12
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 12, $this->source); })()))) {
            // line 13
            yield "        <p class=\"login_message\">No projects available at the moment.</p>
    ";
        } else {
            // line 15
            yield "        <ul>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 17
                yield "                <li style=\"margin-bottom: 20px;\">
                    <strong>";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 18), "html", null, true);
                yield "</strong><br>
                    ";
                // line 19
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 19)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 19), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 19), "html", null, true)));
                yield "
                    <br>
                    XP: ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "xp", [], "any", false, false, false, 21), "html", null, true);
                yield " |
                    Estimated time: ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "estimatedTimeInHours", [], "any", false, false, false, 22), "html", null, true);
                yield " hours
                    <br>
                    <form action=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 24)]), "html", null, true);
                yield "\" method=\"get\" style=\"margin-top: 5px;\">
                        <button type=\"submit\" class=\"btn btn-secondary\">View Details</button>
                    </form>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "        </ul>
    ";
        }
        // line 31
        yield "
    ";
        // line 32
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "        <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userpage", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" method=\"get\" style=\"margin-top: 30px;\">
            <button type=\"submit\" class=\"btn btn-primary\">Back to your profile</button>
        </form>
    ";
        }
        // line 37
        yield "</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "project/list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  159 => 37,  151 => 33,  149 => 32,  146 => 31,  142 => 29,  131 => 24,  126 => 22,  122 => 21,  117 => 19,  113 => 18,  110 => 17,  106 => 16,  103 => 15,  99 => 13,  97 => 12,  91 => 8,  89 => 7,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} | Projects{% endblock %}

{% block body %}

{% include 'components/navbar.html.twig' %}

<div class=\"edit_info\">
    <h1>Available Projects</h1>

    {% if projects is empty %}
        <p class=\"login_message\">No projects available at the moment.</p>
    {% else %}
        <ul>
            {% for project in projects %}
                <li style=\"margin-bottom: 20px;\">
                    <strong>{{ project.name }}</strong><br>
                    {{ project.description|length > 100 ? project.description[:100] ~ '...' : project.description }}
                    <br>
                    XP: {{ project.xp }} |
                    Estimated time: {{ project.estimatedTimeInHours }} hours
                    <br>
                    <form action=\"{{ path('project_show', { id: project.id }) }}\" method=\"get\" style=\"margin-top: 5px;\">
                        <button type=\"submit\" class=\"btn btn-secondary\">View Details</button>
                    </form>
                </li>
            {% endfor %}
        </ul>
    {% endif %}

    {% if app.user %}
        <form action=\"{{ path('userpage', { id: app.user.id }) }}\" method=\"get\" style=\"margin-top: 30px;\">
            <button type=\"submit\" class=\"btn btn-primary\">Back to your profile</button>
        </form>
    {% endif %}
</div>

{% endblock %}
", "project/list.html.twig", "/home/mapichec/Desktop/Piscine-PHP-Rush01/intranet/templates/project/list.html.twig");
    }
}
