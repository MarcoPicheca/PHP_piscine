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

/* agenda/agenda.html.twig */
class __TwigTemplate_31dd74291cfb4a29055601cc8dfb828c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agenda/agenda.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "
<h1>Agenda</h1>

<div class=\"example-wrapper\">
\t<h1>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "! ✅</h1>
    ";
        // line 9
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_new");
            yield "\" class=\"btn btn-primary\">+ Crea Evento</a>
    ";
        }
        // line 12
        yield "
\t";
        // line 13
        if ((($tmp = (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "\t<ul>
\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 16
                yield "\t\t<li>
\t\t\t<p>";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 17), "html", null, true);
                yield "</p>
\t\t\t<h3 class=\"event-title\">";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 18), "html", null, true);
                yield "</h3>
\t\t\t";
                // line 19
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "participants", [], "any", false, false, false, 19) < CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 19))) {
                    // line 20
                    yield "\t\t\t<div class=\"event-container\">
\t\t\t\t<div class=\"date-container\">
\t\t\t\t\t<p>";
                    // line 22
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true);
                    yield "</p>
\t\t\t\t\t<p>";
                    // line 23
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startTime", [], "any", false, false, false, 23), "H:i"), "html", null, true);
                    yield " h</p>
\t\t\t\t\t<p>";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "endTime", [], "any", false, false, false, 24), "H:i"), "html", null, true);
                    yield " h</p>
\t\t\t\t\t<p>";
                    // line 25
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "duration", [], "any", false, false, false, 25), "html", null, true);
                    yield " h</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"event-description\">
\t\t\t\t\t";
                    // line 28
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 28), "html", null, true);
                    yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"event-participant\">
\t\t\t\t\t";
                    // line 31
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "participants", [], "any", false, false, false, 31), "html", null, true);
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "maxParticipants", [], "any", false, false, false, 31), "html", null, true);
                    yield "
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 34
                    yield "\t\t\t\t<div>
\t\t\t\t\tThis event is full!
\t\t\t\t</div>
\t\t\t";
                }
                // line 38
                yield "\t\t\t</div>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "\t</ul>
\t";
        } else {
            // line 43
            yield "\t<div>
\t\tNo events scheduled!
\t<div>
\t";
        }
        // line 47
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
        return "agenda/agenda.html.twig";
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
        return array (  170 => 47,  164 => 43,  160 => 41,  152 => 38,  146 => 34,  138 => 31,  132 => 28,  126 => 25,  122 => 24,  118 => 23,  114 => 22,  110 => 20,  108 => 19,  104 => 18,  100 => 17,  97 => 16,  93 => 15,  90 => 14,  88 => 13,  85 => 12,  79 => 10,  77 => 9,  73 => 8,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<h1>Agenda</h1>

<div class=\"example-wrapper\">
\t<h1>{{ controller_name }}! ✅</h1>
    {% if is_granted('ROLE_ADMIN') %}
        <a href=\"{{ path('admin_event_new') }}\" class=\"btn btn-primary\">+ Crea Evento</a>
    {% endif %}

\t{% if events %}
\t<ul>
\t{% for event in events %}
\t\t<li>
\t\t\t<p>{{event.name}}</p>
\t\t\t<h3 class=\"event-title\">{{event.title}}</h3>
\t\t\t{% if event.participants < event.maxParticipants %}
\t\t\t<div class=\"event-container\">
\t\t\t\t<div class=\"date-container\">
\t\t\t\t\t<p>{{ event.date|date('Y-m-d') }}</p>
\t\t\t\t\t<p>{{ event.startTime|date('H:i') }} h</p>
\t\t\t\t\t<p>{{ event.endTime|date('H:i') }} h</p>
\t\t\t\t\t<p>{{ event.duration }} h</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"event-description\">
\t\t\t\t\t{{event.description}}
\t\t\t\t</div>
\t\t\t\t<div class=\"event-participant\">
\t\t\t\t\t{{event.participants}}/{{event.maxParticipants}}
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div>
\t\t\t\t\tThis event is full!
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t</div>
\t\t</li>
\t{% endfor %}
\t</ul>
\t{% else %}
\t<div>
\t\tNo events scheduled!
\t<div>
\t{% endif %}
</div>
{% endblock %}
", "agenda/agenda.html.twig", "/home/mapichec/Desktop/Piscine-PHP-Rush01/intranet/templates/agenda/agenda.html.twig");
    }
}
