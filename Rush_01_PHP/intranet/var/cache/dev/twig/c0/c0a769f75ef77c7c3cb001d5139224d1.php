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

/* project/show.html.twig */
class __TwigTemplate_4869e384096bb6d6374414783e9cb7e6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div class=\"edit_info\">
    <h1>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

    <p><strong>Description:</strong> ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), "html", null, true);
        yield "</p>
    <p><strong>XP:</strong> ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 10, $this->source); })()), "xp", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
    <p><strong>Estimated Time:</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 11, $this->source); })()), "estimatedTimeInHours", [], "any", false, false, false, 11), "html", null, true);
        yield " hours</p>

    ";
        // line 13
        $context["registeredParticipants"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 13, $this->source); })()), "getUserProjects", [], "method", false, false, false, 13), function ($__up__) use ($context, $macros) { $context["up"] = $__up__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["up"]) || array_key_exists("up", $context) ? $context["up"] : (function () { throw new RuntimeError('Variable "up" does not exist.', 13, $this->source); })()), "validated", [], "any", false, false, false, 13); });
        // line 14
        yield "    ";
        $context["completedParticipants"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 14, $this->source); })()), "getUserProjects", [], "method", false, false, false, 14), function ($__up__) use ($context, $macros) { $context["up"] = $__up__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["up"]) || array_key_exists("up", $context) ? $context["up"] : (function () { throw new RuntimeError('Variable "up" does not exist.', 14, $this->source); })()), "validated", [], "any", false, false, false, 14); });
        // line 15
        yield "
    <p><strong>Registered Participants:</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["registeredParticipants"]) || array_key_exists("registeredParticipants", $context) ? $context["registeredParticipants"] : (function () { throw new RuntimeError('Variable "registeredParticipants" does not exist.', 16, $this->source); })())), "html", null, true);
        yield "</p>
    <p><strong>Completed</strong> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["completedParticipants"]) || array_key_exists("completedParticipants", $context) ? $context["completedParticipants"] : (function () { throw new RuntimeError('Variable "completedParticipants" does not exist.', 17, $this->source); })())), "html", null, true);
        yield " times <strong>so far.</strong></p>

    ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "        ";
            if ((array_key_exists("userProject", $context) && (isset($context["userProject"]) || array_key_exists("userProject", $context) ? $context["userProject"] : (function () { throw new RuntimeError('Variable "userProject" does not exist.', 20, $this->source); })()))) {
                // line 21
                yield "            ";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["userProject"]) || array_key_exists("userProject", $context) ? $context["userProject"] : (function () { throw new RuntimeError('Variable "userProject" does not exist.', 21, $this->source); })()), "validated", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 22
                    yield "                <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_unregister", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
                    yield "\" method=\"post\">
                    <button class=\"btn btn-primary\" type=\"submit\">Unregister</button>
                </form>

                <form action=\"";
                    // line 26
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_project", ["projectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
                    yield "\" method=\"get\">
                    <button class=\"btn btn-primary\" type=\"submit\">💬 Chat Progetto</button>
                </form>

                ";
                    // line 30
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["userProject"]) || array_key_exists("userProject", $context) ? $context["userProject"] : (function () { throw new RuntimeError('Variable "userProject" does not exist.', 30, $this->source); })()), "uploadedFilePath", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 31
                        yield "                    <h3>Upload your project file</h3>
                    ";
                        // line 32
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "evalPoints", [], "any", false, false, false, 32) >= 1)) {
                            // line 33
                            yield "                        <form action=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_upload", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
                            yield "\" method=\"post\" enctype=\"multipart/form-data\">
                            <input type=\"file\" name=\"project_file\" required />
                            <button type=\"submit\">Submit for Evaluation</button>
                        </form>
                    ";
                        } else {
                            // line 38
                            yield "                        <div style=\"background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin: 10px 0;\">
                            <strong>⚠️ Insufficient Evaluation Points</strong><br>
                            You need at least 1 evaluation point to submit a project for evaluation.<br>
                            <small>Current evaluation points: ";
                            // line 41
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "evalPoints", [], "any", false, false, false, 41), "html", null, true);
                            yield "</small>
                        </div>
                    ";
                        }
                        // line 44
                        yield "                ";
                    } else {
                        // line 45
                        yield "                    <p><strong>✅ Project submitted for evaluation</strong></p>
                    <p>Uploaded file: <a href=\"";
                        // line 46
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/project_files/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["userProject"]) || array_key_exists("userProject", $context) ? $context["userProject"] : (function () { throw new RuntimeError('Variable "userProject" does not exist.', 46, $this->source); })()), "uploadedFilePath", [], "any", false, false, false, 46))), "html", null, true);
                        yield "\" target=\"_blank\">Download</a></p>
                    
                    ";
                        // line 48
                        if (((isset($context["evaluationRequest"]) || array_key_exists("evaluationRequest", $context) ? $context["evaluationRequest"] : (function () { throw new RuntimeError('Variable "evaluationRequest" does not exist.', 48, $this->source); })()) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluationRequest"]) || array_key_exists("evaluationRequest", $context) ? $context["evaluationRequest"] : (function () { throw new RuntimeError('Variable "evaluationRequest" does not exist.', 48, $this->source); })()), "evaluator", [], "any", false, false, false, 48))) {
                            // line 49
                            yield "                        <h3>Select an Evaluator</h3>
                        <p>Choose an available evaluation slot:</p>
                        
                        ";
                            // line 52
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["availableSlots"]) || array_key_exists("availableSlots", $context) ? $context["availableSlots"] : (function () { throw new RuntimeError('Variable "availableSlots" does not exist.', 52, $this->source); })())) > 0)) {
                                // line 53
                                yield "                            <div style=\"margin: 1rem 0;\">
                                ";
                                // line 54
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableSlots"]) || array_key_exists("availableSlots", $context) ? $context["availableSlots"] : (function () { throw new RuntimeError('Variable "availableSlots" does not exist.', 54, $this->source); })()));
                                foreach ($context['_seq'] as $context["_key"] => $context["slot"]) {
                                    // line 55
                                    yield "                                    <div style=\"border: 1px solid #ccc; padding: 10px; margin: 5px 0; border-radius: 5px;\">
                                        <strong>";
                                    // line 56
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "userId", [], "any", false, false, false, 56), "firstName", [], "any", false, false, false, 56), "html", null, true);
                                    yield " ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "userId", [], "any", false, false, false, 56), "lastName", [], "any", false, false, false, 56), "html", null, true);
                                    yield "</strong><br>
                                        <small>";
                                    // line 57
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "startTime", [], "any", false, false, false, 57), "Y-m-d H:i"), "html", null, true);
                                    yield " - ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "endTime", [], "any", false, false, false, 57), "H:i"), "html", null, true);
                                    yield "</small><br>
                                        <form action=\"";
                                    // line 58
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_select_evaluator", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "slotId" => CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                                    yield "\" method=\"post\" style=\"margin-top: 5px;\">
                                            <button type=\"submit\" class=\"btn btn-primary btn-sm\">Select this Evaluator</button>
                                        </form>
                                    </div>
                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['slot'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 63
                                yield "                            </div>
                        ";
                            } else {
                                // line 65
                                yield "                            <p><em>No evaluation slots available at the moment. Please check back later.</em></p>
                        ";
                            }
                            // line 67
                            yield "                    ";
                        } elseif (((isset($context["evaluationRequest"]) || array_key_exists("evaluationRequest", $context) ? $context["evaluationRequest"] : (function () { throw new RuntimeError('Variable "evaluationRequest" does not exist.', 67, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluationRequest"]) || array_key_exists("evaluationRequest", $context) ? $context["evaluationRequest"] : (function () { throw new RuntimeError('Variable "evaluationRequest" does not exist.', 67, $this->source); })()), "evaluator", [], "any", false, false, false, 67))) {
                            // line 68
                            yield "                        <p><strong>🔍 Under evaluation by:</strong> ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluationRequest"]) || array_key_exists("evaluationRequest", $context) ? $context["evaluationRequest"] : (function () { throw new RuntimeError('Variable "evaluationRequest" does not exist.', 68, $this->source); })()), "evaluator", [], "any", false, false, false, 68), "firstName", [], "any", false, false, false, 68), "html", null, true);
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluationRequest"]) || array_key_exists("evaluationRequest", $context) ? $context["evaluationRequest"] : (function () { throw new RuntimeError('Variable "evaluationRequest" does not exist.', 68, $this->source); })()), "evaluator", [], "any", false, false, false, 68), "lastName", [], "any", false, false, false, 68), "html", null, true);
                            yield "</p>
                        
                        ";
                            // line 70
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluationRequest"]) || array_key_exists("evaluationRequest", $context) ? $context["evaluationRequest"] : (function () { throw new RuntimeError('Variable "evaluationRequest" does not exist.', 70, $this->source); })()), "validated", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 71
                                yield "                            <p><strong>✅ Evaluation completed!</strong></p>
                        ";
                            } else {
                                // line 73
                                yield "                            <p><em>Waiting for evaluation to be completed...</em></p>
                        ";
                            }
                            // line 75
                            yield "                    ";
                        }
                        // line 76
                        yield "                ";
                    }
                    // line 77
                    yield "                
            ";
                } else {
                    // line 79
                    yield "                <p><strong>Project completed ✅</strong></p>
                ";
                    // line 80
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["userProject"]) || array_key_exists("userProject", $context) ? $context["userProject"] : (function () { throw new RuntimeError('Variable "userProject" does not exist.', 80, $this->source); })()), "uploadedFilePath", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 81
                        yield "                    <p>Uploaded file: <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/project_files/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["userProject"]) || array_key_exists("userProject", $context) ? $context["userProject"] : (function () { throw new RuntimeError('Variable "userProject" does not exist.', 81, $this->source); })()), "uploadedFilePath", [], "any", false, false, false, 81))), "html", null, true);
                        yield "\" target=\"_blank\">Download</a></p>
                ";
                    }
                    // line 83
                    yield "                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["userProject"]) || array_key_exists("userProject", $context) ? $context["userProject"] : (function () { throw new RuntimeError('Variable "userProject" does not exist.', 83, $this->source); })()), "validatedBy", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 84
                        yield "                    <p><strong>Validated by:</strong> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["userProject"]) || array_key_exists("userProject", $context) ? $context["userProject"] : (function () { throw new RuntimeError('Variable "userProject" does not exist.', 84, $this->source); })()), "validatedBy", [], "any", false, false, false, 84), "firstName", [], "any", false, false, false, 84), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["userProject"]) || array_key_exists("userProject", $context) ? $context["userProject"] : (function () { throw new RuntimeError('Variable "userProject" does not exist.', 84, $this->source); })()), "validatedBy", [], "any", false, false, false, 84), "lastName", [], "any", false, false, false, 84), "html", null, true);
                        yield "</p>
                ";
                    }
                    // line 86
                    yield "            ";
                }
                // line 87
                yield "        ";
            } else {
                // line 88
                yield "        
            <form action=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_register", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)]), "html", null, true);
                yield "\" method=\"post\">
                <button class=\"btn btn-primary\" type=\"submit\">Register</button>
            </form>
        ";
            }
            // line 93
            yield "    ";
        } else {
            // line 94
            yield "        <p><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            yield "\">Login</a> to register for this project.</p>
    ";
        }
        // line 96
        yield "
    <form action=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
        yield "\" method=\"get\">
        <button class=\"btn btn-primary\" type=\"submit\">Back to list</button>
    </form>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "project/show.html.twig";
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
        return array (  315 => 97,  312 => 96,  306 => 94,  303 => 93,  296 => 89,  293 => 88,  290 => 87,  287 => 86,  279 => 84,  276 => 83,  270 => 81,  268 => 80,  265 => 79,  261 => 77,  258 => 76,  255 => 75,  251 => 73,  247 => 71,  245 => 70,  237 => 68,  234 => 67,  230 => 65,  226 => 63,  215 => 58,  209 => 57,  203 => 56,  200 => 55,  196 => 54,  193 => 53,  191 => 52,  186 => 49,  184 => 48,  179 => 46,  176 => 45,  173 => 44,  167 => 41,  162 => 38,  153 => 33,  151 => 32,  148 => 31,  146 => 30,  139 => 26,  131 => 22,  128 => 21,  125 => 20,  123 => 19,  118 => 17,  114 => 16,  111 => 15,  108 => 14,  106 => 13,  101 => 11,  97 => 10,  93 => 9,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ project.name }}{% endblock %}

{% block body %}
<div class=\"edit_info\">
    <h1>{{ project.name }}</h1>

    <p><strong>Description:</strong> {{ project.description }}</p>
    <p><strong>XP:</strong> {{ project.xp }}</p>
    <p><strong>Estimated Time:</strong> {{ project.estimatedTimeInHours }} hours</p>

    {% set registeredParticipants = project.getUserProjects()|filter(up => not up.validated) %}
    {% set completedParticipants = project.getUserProjects()|filter(up => up.validated) %}

    <p><strong>Registered Participants:</strong> {{ registeredParticipants|length }}</p>
    <p><strong>Completed</strong> {{ completedParticipants|length }} times <strong>so far.</strong></p>

    {% if app.user %}
        {% if userProject is defined and userProject %}
            {% if not userProject.validated %}
                <form action=\"{{ path('project_unregister', { id: project.id }) }}\" method=\"post\">
                    <button class=\"btn btn-primary\" type=\"submit\">Unregister</button>
                </form>

                <form action=\"{{ path('chat_project', { projectId: project.id }) }}\" method=\"get\">
                    <button class=\"btn btn-primary\" type=\"submit\">💬 Chat Progetto</button>
                </form>

                {% if not userProject.uploadedFilePath %}
                    <h3>Upload your project file</h3>
                    {% if app.user.evalPoints >= 1 %}
                        <form action=\"{{ path('project_upload', { id: project.id }) }}\" method=\"post\" enctype=\"multipart/form-data\">
                            <input type=\"file\" name=\"project_file\" required />
                            <button type=\"submit\">Submit for Evaluation</button>
                        </form>
                    {% else %}
                        <div style=\"background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin: 10px 0;\">
                            <strong>⚠️ Insufficient Evaluation Points</strong><br>
                            You need at least 1 evaluation point to submit a project for evaluation.<br>
                            <small>Current evaluation points: {{ app.user.evalPoints }}</small>
                        </div>
                    {% endif %}
                {% else %}
                    <p><strong>✅ Project submitted for evaluation</strong></p>
                    <p>Uploaded file: <a href=\"{{ asset('uploads/project_files/' ~ userProject.uploadedFilePath) }}\" target=\"_blank\">Download</a></p>
                    
                    {% if evaluationRequest and not evaluationRequest.evaluator %}
                        <h3>Select an Evaluator</h3>
                        <p>Choose an available evaluation slot:</p>
                        
                        {% if availableSlots|length > 0 %}
                            <div style=\"margin: 1rem 0;\">
                                {% for slot in availableSlots %}
                                    <div style=\"border: 1px solid #ccc; padding: 10px; margin: 5px 0; border-radius: 5px;\">
                                        <strong>{{ slot.userId.firstName }} {{ slot.userId.lastName }}</strong><br>
                                        <small>{{ slot.startTime|date('Y-m-d H:i') }} - {{ slot.endTime|date('H:i') }}</small><br>
                                        <form action=\"{{ path('project_select_evaluator', { id: project.id, slotId: slot.id }) }}\" method=\"post\" style=\"margin-top: 5px;\">
                                            <button type=\"submit\" class=\"btn btn-primary btn-sm\">Select this Evaluator</button>
                                        </form>
                                    </div>
                                {% endfor %}
                            </div>
                        {% else %}
                            <p><em>No evaluation slots available at the moment. Please check back later.</em></p>
                        {% endif %}
                    {% elseif evaluationRequest and evaluationRequest.evaluator %}
                        <p><strong>🔍 Under evaluation by:</strong> {{ evaluationRequest.evaluator.firstName }} {{ evaluationRequest.evaluator.lastName }}</p>
                        
                        {% if evaluationRequest.validated %}
                            <p><strong>✅ Evaluation completed!</strong></p>
                        {% else %}
                            <p><em>Waiting for evaluation to be completed...</em></p>
                        {% endif %}
                    {% endif %}
                {% endif %}
                
            {% else %}
                <p><strong>Project completed ✅</strong></p>
                {% if userProject.uploadedFilePath %}
                    <p>Uploaded file: <a href=\"{{ asset('uploads/project_files/' ~ userProject.uploadedFilePath) }}\" target=\"_blank\">Download</a></p>
                {% endif %}
                {% if userProject.validatedBy %}
                    <p><strong>Validated by:</strong> {{ userProject.validatedBy.firstName }} {{ userProject.validatedBy.lastName }}</p>
                {% endif %}
            {% endif %}
        {% else %}
        
            <form action=\"{{ path('project_register', { id: project.id }) }}\" method=\"post\">
                <button class=\"btn btn-primary\" type=\"submit\">Register</button>
            </form>
        {% endif %}
    {% else %}
        <p><a href=\"{{ path('login') }}\">Login</a> to register for this project.</p>
    {% endif %}

    <form action=\"{{ path('project_list') }}\" method=\"get\">
        <button class=\"btn btn-primary\" type=\"submit\">Back to list</button>
    </form>
</div>
{% endblock %}
", "project/show.html.twig", "/home/mapichec/Desktop/Piscine-PHP-Rush01/intranet/templates/project/show.html.twig");
    }
}
