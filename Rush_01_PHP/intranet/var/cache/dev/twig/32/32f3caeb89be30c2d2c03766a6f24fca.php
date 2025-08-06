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

/* personal/eval.html.twig */
class __TwigTemplate_d81be180ef77db248c592fcf1b9c7875 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personal/eval.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " | Slot";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "
";
        // line 8
        yield from $this->load("components/navbar.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 11
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                ";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
<div class=\"container\" style=\"max-width: 1000px; margin: 2rem auto;\">
    <h1>Evaluation Management</h1>

    ";
        // line 22
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pendingEvaluations"]) || array_key_exists("pendingEvaluations", $context) ? $context["pendingEvaluations"] : (function () { throw new RuntimeError('Variable "pendingEvaluations" does not exist.', 22, $this->source); })())) > 0)) {
            // line 23
            yield "        <div style=\"background: #fff3cd; border: 1px solid #ffeaa7; border-radius: 5px; padding: 1rem; margin: 1rem 0;\">
            <h2>⏳ Pending Evaluations (";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pendingEvaluations"]) || array_key_exists("pendingEvaluations", $context) ? $context["pendingEvaluations"] : (function () { throw new RuntimeError('Variable "pendingEvaluations" does not exist.', 24, $this->source); })())), "html", null, true);
            yield ")</h2>
            <div style=\"display: grid; gap: 1rem; margin-top: 1rem;\">
                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pendingEvaluations"]) || array_key_exists("pendingEvaluations", $context) ? $context["pendingEvaluations"] : (function () { throw new RuntimeError('Variable "pendingEvaluations" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
                // line 27
                yield "                    <div style=\"border: 1px solid #ddd; border-radius: 5px; padding: 1rem; background: white;\">
                        <h4>";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "project", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
                yield "</h4>
                        <p><strong>Requester:</strong> ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "requester", [], "any", false, false, false, 29), "firstName", [], "any", false, false, false, 29), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "requester", [], "any", false, false, false, 29), "lastName", [], "any", false, false, false, 29), "html", null, true);
                yield "</p>
                        <p><strong>Submitted:</strong> ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "createdAt", [], "any", false, false, false, 30), "Y-m-d H:i"), "html", null, true);
                yield "</p>
                        
                        <div style=\"margin-top: 1rem;\">
                            <a href=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_evaluation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">
                                🔍 Review & Evaluate
                            </a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['evaluation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "            </div>
        </div>
    ";
        }
        // line 42
        yield "
    ";
        // line 44
        yield "    <div style=\"background: #f8f9fa; border-radius: 5px; padding: 1.5rem; margin: 2rem 0;\">
        <h2>Create New Evaluation Slot</h2>
        ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_start');
        yield "
            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "startTime", [], "any", false, false, false, 47), 'row');
        yield "
            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "endTime", [], "any", false, false, false, 48), 'row');
        yield "
            <button class=\"btn btn-primary\">Create Slot</button>
        ";
        // line 50
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        yield "
    </div>

    ";
        // line 54
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["userSlots"]) || array_key_exists("userSlots", $context) ? $context["userSlots"] : (function () { throw new RuntimeError('Variable "userSlots" does not exist.', 54, $this->source); })())) > 0)) {
            // line 55
            yield "        <div style=\"margin-top: 2rem;\">
            <h2>Your Evaluation Slots</h2>
            <div style=\"display: grid; gap: 1rem; margin-top: 1rem;\">
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["userSlots"]) || array_key_exists("userSlots", $context) ? $context["userSlots"] : (function () { throw new RuntimeError('Variable "userSlots" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["slot"]) {
                // line 59
                yield "                    <div style=\"border: 1px solid #ddd; border-radius: 5px; padding: 1rem; background: white;\">
                        <div style=\"display: flex; justify-content: space-between; align-items: center;\">
                            <div>
                                <strong>";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "startTime", [], "any", false, false, false, 62), "Y-m-d H:i"), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "endTime", [], "any", false, false, false, 62), "H:i"), "html", null, true);
                yield "</strong>
                                ";
                // line 63
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "startTime", [], "any", false, false, false, 63) < $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
                    // line 64
                    yield "                                    <span style=\"color: #6c757d;\">(Past)</span>
                                ";
                } elseif (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source,                 // line 65
$context["slot"], "startTime", [], "any", false, false, false, 65), "Y-m-d") == $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->convertDate(), "Y-m-d"))) {
                    // line 66
                    yield "                                    <span style=\"color: #ffc107;\">(Today)</span>
                                ";
                } else {
                    // line 68
                    yield "                                    <span style=\"color: #28a745;\">(Upcoming)</span>
                                ";
                }
                // line 70
                yield "                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['slot'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "            </div>
        </div>
    ";
        }
        // line 77
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
        return "personal/eval.html.twig";
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
        return array (  259 => 77,  254 => 74,  245 => 70,  241 => 68,  237 => 66,  235 => 65,  232 => 64,  230 => 63,  224 => 62,  219 => 59,  215 => 58,  210 => 55,  207 => 54,  201 => 50,  196 => 48,  192 => 47,  188 => 46,  184 => 44,  181 => 42,  176 => 39,  164 => 33,  158 => 30,  152 => 29,  148 => 28,  145 => 27,  141 => 26,  136 => 24,  133 => 23,  130 => 22,  124 => 17,  118 => 16,  109 => 13,  104 => 12,  99 => 11,  95 => 10,  92 => 9,  90 => 8,  87 => 7,  77 => 6,  58 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/eval_slot/new.html.twig #}
{% extends 'base.html.twig' %}

{% block title %} {{parent()}} | Slot{% endblock %}

{% block body %}

{% include 'components/navbar.html.twig' %}

    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

<div class=\"container\" style=\"max-width: 1000px; margin: 2rem auto;\">
    <h1>Evaluation Management</h1>

    {# Pending Evaluations Section #}
    {% if pendingEvaluations|length > 0 %}
        <div style=\"background: #fff3cd; border: 1px solid #ffeaa7; border-radius: 5px; padding: 1rem; margin: 1rem 0;\">
            <h2>⏳ Pending Evaluations ({{ pendingEvaluations|length }})</h2>
            <div style=\"display: grid; gap: 1rem; margin-top: 1rem;\">
                {% for evaluation in pendingEvaluations %}
                    <div style=\"border: 1px solid #ddd; border-radius: 5px; padding: 1rem; background: white;\">
                        <h4>{{ evaluation.project.name }}</h4>
                        <p><strong>Requester:</strong> {{ evaluation.requester.firstName }} {{ evaluation.requester.lastName }}</p>
                        <p><strong>Submitted:</strong> {{ evaluation.createdAt|date('Y-m-d H:i') }}</p>
                        
                        <div style=\"margin-top: 1rem;\">
                            <a href=\"{{ path('project_evaluation_show', { id: evaluation.id }) }}\" class=\"btn btn-primary\">
                                🔍 Review & Evaluate
                            </a>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    {% endif %}

    {# Create New Slot Section #}
    <div style=\"background: #f8f9fa; border-radius: 5px; padding: 1.5rem; margin: 2rem 0;\">
        <h2>Create New Evaluation Slot</h2>
        {{ form_start(form) }}
            {{ form_row(form.startTime) }}
            {{ form_row(form.endTime) }}
            <button class=\"btn btn-primary\">Create Slot</button>
        {{ form_end(form) }}
    </div>

    {# User's Slots Section #}
    {% if userSlots|length > 0 %}
        <div style=\"margin-top: 2rem;\">
            <h2>Your Evaluation Slots</h2>
            <div style=\"display: grid; gap: 1rem; margin-top: 1rem;\">
                {% for slot in userSlots %}
                    <div style=\"border: 1px solid #ddd; border-radius: 5px; padding: 1rem; background: white;\">
                        <div style=\"display: flex; justify-content: space-between; align-items: center;\">
                            <div>
                                <strong>{{ slot.startTime|date('Y-m-d H:i') }} - {{ slot.endTime|date('H:i') }}</strong>
                                {% if slot.startTime < date() %}
                                    <span style=\"color: #6c757d;\">(Past)</span>
                                {% elseif slot.startTime|date('Y-m-d') == date()|date('Y-m-d') %}
                                    <span style=\"color: #ffc107;\">(Today)</span>
                                {% else %}
                                    <span style=\"color: #28a745;\">(Upcoming)</span>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    {% endif %}
</div>
{% endblock %}", "personal/eval.html.twig", "/home/mapichec/Desktop/Piscine-PHP-Rush01/intranet/templates/personal/eval.html.twig");
    }
}
