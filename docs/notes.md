DESIGN PATTERNS NOTES
======================
## Strict modelling
    object-oriented designs often end up with classes that have no counterparts in the real world
    strict modeling of the real world leads to a system that reflects today's realities but not necessarily tomorrow's
--------------------------------------------------------------------------------------------------------
## Type
     an object may have many types, and widely different objects can share a type.
     In contrast, an object's type only refers to its interface—the set of requests to which it can respond.
     A type is a name used to denote a particular interface.
     An object's interface characterizes the complete set of requests that can be sent to the object
     An object may have many types, and widely different objects can share a type
     Don't declare variables to be instances of particular concrete classes
     Type vs implementation - an object's implementation is defined by its class
     Of course,there's a close relationship between class and type. Because a class defines the operations an object can perform, it also defines the object's type.
--------------------------------------------------------------------------------------------------------
## Reuse
     Implementation inheritance problem
     Inheritance's ability to define families of objects with identical interfaces
     Object composition == more objects, less class hierarchies
     Assembling existing components (never quite rich set of objects)
     Inheritance (new object from old ones, $this)
     Delegation is a way of making composition as powerful for reuse as inheritance (self)
     Delegation (reference to object)
     In delegation, two objects are involved in handling a request: a receiving object delegates operations to its delegate,which is analogous to subclasses deferring requests to parent classes.
--------------------------------------------------------------------------------------------------------
## Run time
     run time (dynamic binding)
     Reuse by composition (run time) is called BLACK-BOX reuse, because no internal details of objects are visible
     Reuse by subclassing (compile type) is often referred to as WHITE-BOX reuse. The term "white-box" refers to visibility
     The run-time association of a request to an object and one of its operations is known as dynamic binding
     The code structure is frozen at compile-time;
     A program's run-time structure consists of rapidly changing networks of communicating objects
     The system's run-time structure must be imposed more by the designer than the language.
     The run-time structures aren't clear from the code until you understand the patterns.
--------------------------------------------------------------------------------------------------------
## Random
     Aggregation implies that an aggregate object and its owner have identical lifetimes.
     Aggregation relationships tend to be fewer and more permanent than acquaintance. 
     Acquaintances, in contrast, are made and remain more frequently, sometimes existing only for the duration of an operation
     Encapsulating the concept that varies (change without redesign)
     Heavy use of object composition can make designs harder to understand.
     identify (less obvious) abstractions
     object granularity (size)
--------------------------------------------------------------------------------------------------------
Functional programming/problems with OOP
======================
    In many ways, well crafted object-oriented code converges upon a functional style
    OOP problem binding data structure to behavior is a mechanisms of state encapsulation which hides the underlying problem instead of solving it
    Optimizing for data structure encapsulation not only weakens composition characteristics, but also hides the underlying problem of explicit state
    Adding methods to a class exerts pressure on the single-responsibility principle
    In functional programming, given that a function has a single input and a single output, functions naturally have a single responsibility
    In a functional language, functions can be substituted at will and as such, there is no need to “design” for extensibility
    Closure is attained by encapsulation, or rather by the hiding of moving part
    As a matter of course, the declarative and side-effect free nature of functional programming provide for dependency inversion
    In object-oriented programming, high-level modules depend on infrastructure modules primarily to invoke side-effects
    Heavy reliance on state in object-oriented programming makes references or pointers a first class citizen rather than the structure of the data itself
    Since functional programming is more declarative, function names and interfaces tend to be more focused on intent rather than the the underlying mechanics
    Unlike imperative programming, functional programming makes side effects an explicitly designated exception
    Where it fits, define an operation whose return type is the same as the type of its argument(s)

Concepts
--------
       functional vs oop (column vs row example from coursera)
       rows are operations, columns are types
       Explicit management of state is avoided through immutability
       Explicit return values are favored over implicit side effects
       The culmination of these characteristics is a more declarative paradigm
       Powerful composition facilities promote reuse without compromising encapsulation
       service objects are pure functions (in functional sense with one public object)
       immutable variables are not variables
       reduces action on distance
       bugs comes from state
       map/reduce 
       apply (to another context)
       currying (partial application)
       memoization
       WHAT not HOW
       composition
       monads
       lazy evaluation
       abstraction (no details)
       request/response vs input/output
       use case (request)
       concept of type in functional programming (input/output)
       induction (from specific to general) vs deduction (from general to specific)
       recursion (test,base case, recursive case)
       recursion (keep track of deferred operations, put things of stack)

Process/procedural vs functional
================================
       process/procedure (doesn't return value) 
       function (returns value)
       function rely on others, collaboration, delegation
       function is WHAT
       process is HOW
       process is algorithm, workflow, scope, steps, deadlines, OOP, encapsulation for complexity problem, state, variables, side effects
       from function (functional) to process (procedural, behavior no coupled to data) and methods (object, behavior coupled to state) 

Immutability (PHP roundtable)
-----------------------------
       state (captured in moment)
       state emphasys order (variables)
       context in which variable exists (environment,class context...)
       OOP is state in context (encapsulated)
       functional context (all data explicit)
       GLOBALS scope (visible from all context space/time)
       TIME IS IMPLICIT PARAMETER
       make HTTP request immutable (instead pass message?)
       primitives are immutable automatically
       structured objects are muttable
       build things in USER SPACE that supports functional concepts
       eliminate temporary variables
       change based only on input (I/O everywhere)
       never change input
       code as relationships/mapping
--------------------------------------------------------------------------------------------------------
## Top level patterns clasification
##By purpose (what pattern does)
       Creational (class,object)
       Structural (class,object)
       Behavioral (class,object)
##By scope (to classes or objects)
       class scope (inheritance,static,compile-time)
       object scope (composition,dynamic,run-time)


Three kind of software
======================
    Application programs (internal reuse)
    Toolkits (like subroutine libraries, write the code/call toolkit)
    Frameworks (design reuse over code reuse,reuse the framework/call the code,inversion of control)

##Creational
    Creational patterns become important as systems evolve to depend more on object composition than class inheritance)
    A class creational pattern uses inheritance to vary the class that's instantiated, whereas an object creational pattern will delegate instantiation to another object.
###Abstract Factory (service)
    Provide an interface for creating families of related or dependent objects without specifying their concrete classes
    Clients manipulate instances through their abstract interfaces
    Participants (Abstract/ConcreteFactory, Abstract/ConcreteProduct,Client)
    the difference is that the intended purpose of the class containing a factory method is not to create objects, while an abstract factory should only be used to create objects.
    Create objects at run-time
    Expose abstract method factory name (to client) 
    Encapsulate creation process (hidden from client)
    Required subclassing
    Client is calling subclass (which encapsulate instantiation of objects)
###Factory method (service)
    the difference is that the intended purpose of the class containing a factory method is not to create objects, while an abstract factory should only be used to create objects.
    Define an interface for creating an object, but let subclasses decide which class to instantiate
    Participants (ProductInterface/ConcreteProduct, Abstract/ConcreteProduct,Client)
    Similar to abstract factory 
    Subclass has more freedom (what to instantiate)
    Choice is given to client
###Builder (service)
    avoid constructor polution
    avoid telescoping constructor
    Separate the construction of a complex object from its representation so that the same construction process can create different representations
    Build object in steps
    Director and builder
    Builder is calling dependente object (what to build)
    Director is calling builder
    Client is calling director
###Singleton (service)
    Ensure a class has only one instance, and provide a global point of access to it
###Prototype 
    __clone to other slot of memory,delegation

##Structural(compositional, logic internal to the structure, wrappers)
###Adapter (known as wrapper)(service)
       convert interface into one that clients expect (for one or many objects)
       different interface from wrapped class(derived)
       exposes only releveant methods to client
       Participants (Adapter,Adaptee,Target,Client)
       make things work after they are designed
       True wrapper example (encapsulation)
       Wrapper for dependency object
       Client calls wrapper methods which forwards to adapted code
       Not transparent to client
###Decorator (known as wrapper)(service)
       recursive composition
       without affecting the behavior of other objects from the same class. 
       When extension by subclassing is impractical
       open ended number of objects
       change skin
       focus embellishment
       transparent enclosure (to client)
       client doesn't know difference
       decorator forwards request to its component object
       conform to component interface
       lightweight component
       Attach additional responsibilities to an object dynamically
       smart proxy
       wrapped in constructor
       inheritance is not feasible because it is static and applies to an entire class
       decorate object at run-time,
       more flexible then inheritance
       same interface as wrapped class
       alternative to subclassing
       must be a subclass of wrapped interface/object
       example: grahical embellishment
###Bridge (handle/body) (service)
    decouple an abstraction from its implementation so that the two can vary independently (orthogonal)
    allow layering
    abstraction and implementation can be extended differently
    more complex variation of adapter
    run-time binding of the implementation
    adapter makes things work before design 
    common interface for implementation
    bridge make things work after they are designed
###Proxy (service)
       only one relationship (static?)
       provide a surrogate or placeholder for another object to control access to it
       limit access
       surrogate for another object/
       same interface as wrapped class
       wrapped may not exist
       no object in constructor
###Facade (service)
       provide a unified interface to a set of interfaces in a subsystem. Facade defines a higher-level interface that makes the subsystem easier to use
       higher level interface (for one or many objects)
       different interface,new interface
       unidirectional protocol
###Composite (composite/leaf) (service)
       recursive composition
       open ended number of objects
       representation
       compose objects into tree structures to represent whole-part hierarchies. 
       composite lets clients treat individual objects and compositions of objects uniformly
       treat primitive and composite objects same
       part-whole hierarchies as object
       client use component class interface
       composite implements component interface
       nearly every user interface toolkit or framework uses a composite (from original Smalltalk MVC view implementation)
###Flyweight (sharing expensive resources)(service)
       use sharing to support large numbers of fine-grained objects efficiently
       share what is common (intrinsic)
       extrinsic
       Flyweight context
       no identity (only value share)

##Behavioral (decompositional, external to structure, sender/receiver,find what varies and encapsulate it)
###Chain of responsibility(multiple handlers for request/next)(service)
       avoid coupling the sender of a request to receiver by giving more then one object change to handle request
       pass the object along the chain
       successor reference
       open ended number of objects
###Command (service)
       encapsulate request as object (known as action/transaction)
       request is object
       client sets receiver and insantiate command 
       absrtact command class which encapsulates interface for executing operations
       attach command to invoker
       invoker issues request by calling execute method
       commands are OO replacement for callbacks
       command is implementation of interface
       invoker/receiver paradigm
       execute command on receiver
       undo operation (reverse)
###Iterator (known as cursor)(service)
       access aggregate object sequentially without exposing internals
       iterator and data structure are coupled
###Mediator (service)
       encapsulates communication between multiple objects
       avoid system looks like monolithic
       controlling and coordinating the interactions of a group of objects
       indirect communication
       lozalized behavior
       replaces many-to-many with one-to-many
       mediator encapsulate protocols
###Memento (known as token) (service)
       bookmark
       capture and record objects internal state/for restoring state
       snapshot
       memento and originator are tightly coupled
###Observer (known as publish/subscribe) (service)
       define one to many dependency
       subject and observer (arent tightly coupled together)
       MVC as example(view is observer, model is subject)
       query for subject state
       push/pull
###State (service)
       in a context
       transition from state to state (defined by context)
       context DELEGATES state specific request to concrete state class
       The State pattern puts each branch of the conditional in a separate class.
       context is primary interface for client
       delegation (context to state)
       finite numbet of states
       change behaviour depending on state
       extract state into different classes
       order of state change
       transition to state
       vs strategy
###Strategy (known as policy)(service)
       delegation?
       vs state
       interchangeable algorithms
       many related classes differ only in their behavior
       change guts
       code to an interface (different algorithm implementation?)
       key is to design interfaces for strategy and its context
###Template Method (algorithm skeleton in a base class)(service)
       implement invariant part of algorithm
       localize common behavior
       fundamental method for code reuse
       used in frameworks
       "the Hollywood principle," that is, "Don't call us, we'll call you"
###Visitor (define new operation without changing classes/recursive structure)(service)
       operation on elements of structure
       "accepts" the visitor
       makes adding new operations easy
       gathers related operatons and separates unrelated
       is elements class hierarchy stable?
       double dispatch (depends on two elements, request and receiver)
###Interpreter (service)
    --
## CASE STUDY (lexi editor)
##Document structure,representation,recursive composition,hierarchy(composite)
    My example?
##Formatting (Strategy)
    My example?
##Embelishment (Decorator)
    My example?
##Create families of objects (Abstract factory)
    My example?
##Allow differnt hierarchies to work even if they evolve independently,decouple interface abstraction from implementatnin abstraction(Brigde)
    My example?
##Command (encapsulate request,centralized access to functionality scattered throughout application)
    My example?
##Iterator
##Captures techniques for supporting access and traversal over different object (Iterator,store their own copy of the state of traversal)
    My example   
##Different analysis often require same kind of traversal

UML
===
    dependency
    association (related,not dependent)
    aggregation/composition (has)
    inheritance

#Describing
    name
    intent
    motivation
    structure
    participants
    collaborators
    consenquences
    implementation
    known uses
    related patterns

# Framework
    IoC
    Your code is guest (framework is calling your code)
    Since the framework's main contribution to an application is the architecture it defines. Therefore it's imperative to design the framework to be as flexible and extensible as possible.
    Design patterns are smaller, more abstract and less specialized then framework
    Frameworks (design reuse over code reuse,reuse the framework/call the code,inversion of control)
    nearly every user interface toolkit or framework uses a composite (from original Smalltalk MVC view implementation)
# Library
    You are calling library code 
    Collection of functions

# Patterns in frameworks
    IoC
    MVC 
        ORM
        Templating
        Router

Important concepts
-
    client
    visual representation
    execution
