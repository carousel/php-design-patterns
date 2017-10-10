#DESIGN PATTERNS
* object-oriented designs often end up with classes that have no counterparts in the real world
* strict modeling of the real world leads to a system that reflects today's realities but not necessarily tomorrow's
* an object may have many types, and widely different objects can share a type.
* an object's class defines how the object is implemented.
* In contrast, an object's type only refers to its interface—the set of requests to which it can respond.
* An object's interface characterizes the complete set of requests that can be sent to the object
* A type is a name used to denote a particular interface.
* An object may have many types, and widely different objects can share a type
* Don't declare variables to be instances of particular concrete classes
* The run-time association of a request to an object and one of its operations is known as dynamic binding
* Type vs implementation
* An object's implementation is defined by its class
* Of course,there's a close relationship between class and type. Because a class defines the operations an object can perform, it also defines the object's type.
* REUSING CONCEPT
* Reuse by subclassing (compile type) is often referred to as white-box reuse. The term "white-box" refers to visibility
* Reuse by composition (run time) is called black-box reuse, because no internal details of objects are visible
* Implementation inheritance problem
* Inheritance's ability to define families of objects with identical interfaces
* Object composition == more objects, less class hierarchies
* Assembling existing components (never quite rich set of objects)
* Inheritance (new object from old ones, $this)
* Delegation is a way of making composition as powerful for reuse as inheritance (self)
* Delegation (reference to object)
* In delegation, two objects are involved in handling a request: a receiving object delegates operations to its delegate,which is analogous to subclasses deferring requests to parent classes.
* The code structure is frozen at compile-time;
* A program's run-time structure consists of rapidly changing networks of communicating objects
* Aggregation implies that an aggregate object and its owner have identical lifetimes.
* Aggregation relationships tend to be fewer and more permanent than acquaintance. 
* Acquaintances, in contrast, are made and remade more frequently, sometimes existing only for the duration of an operation
* The system's run-time structure must be imposed more by the designer than the language.
* The run-time structures aren't clear from the code until you understand the patterns.
* Encapsulating the concept that varies (change without redesign)
* Heavy use of object composition can make designs harder to understand.
* Since the framework's main contribution to an application is the architecture it defines. Therefore it's imperative to design the framework to be as flexible and extensible as possible.
* Design patterns are smaller, more abstract and less specialized then framework
* safety and transparency (where to define operations?)

##Creational
*   Creational patterns become important as systems evolve to depend more on object composition than class inheritance.

#THREE KIND OF SOFTWARE 
##Application programs (internal reuse)
##Toolkits (like subroutine libraries, write the code/call toolkit)
##Frameworks (design reuse over code reuse,reuse the framework/call the code,inversion of control)

#CASE STUDY (lexi editor)
##Document structure,representation,recursive composition,hierarchy(composite)
*   my example?
##formatting (Strategy)
*   my example?
##Embelishment (Decorator)
*   my example?
##Create families of objects (Abstract factory)
*   my example?
##Allow differnt hierarchies to work even if they evolve independently,decouple interface abstraction from implementatnin abstraction(Brigde)
*   my example?
##Command (encapsulate request,centralized access to functionality scattered throughout application)
*   my example?
##Iterator
##Captures techniques for supporting access and traversal over different object (Iterator,store their own copy of the state of traversal)
* my example   
##Different analysis often require same kind of traversal






##CREATIONAL
###Abstract Factory (known as kit)
*   Provide an interface for creating families of related or dependent objects without specifying their concrete classes
*   Clients manipulate instances through their abstract interfaces
###Factory Method (known as virtial constructor)
*   Define an interface for creating an object, but let subclasses decide which class to instantiate
###Builder    
*   Separate the construction of a complex object from its representation so that the same construction process can create different representations
###Singleton 
*   Ensure a class has only one instance, and provide a global point of access to it
###Prototype (__clone to other slot of memory,delegation)

##STRUCTURAL(compositional, logic internal to the structure, wrappers)
###Adapter (known as wrapper)
*   convert interface into one that clients expect (for one or many objects)
*   different interface from wrapped class(derived)
*   exposes only releveant methods to client
###Decorator (known as wrapper) 
*   change skin
*   transparent enclosure (to client)
*   client doesn't know difference
*   decorator forwards request to its component object
*   conform to component interface
*   lightweight component
*   Attach additional responsibilities to an object dynamically
*   smart proxy
*   wrapped in constructor
*   inheritance is not feasible because it is static and applies to an entire class
*   decorate object at run-time,
*   more flexible then inheritance
*   same interface as wrapped class
*   alternative to subclassing
*   must be a subclass of wrapped interface/object
*   example: grahical embellishment
###Bridge (handle/body) 
*   decouple an abstraction from its implementation so that the two can vary independently
*   allow layering
*   abstraction and implementation can be extended differently
*   more complex variation of adapter
*   run-time binding of the implementation
*   makes things work before design
*   common interface for implementation
*   decouple an abstraction from implementation/orthogonal
###Proxy 
*   provide a surrogate or placeholder for another object to control access to it
*   limit access
*   surrogate for another object/
*   same interface as wrapped class
*   wrapped may not exist
*   no object in constructor
###Facade 
*   provide a unified interface to a set of interfaces in a subsystem. Facade defines a higher-level interface that makes the subsystem easier to use
*   higher level interface (for one or many objects)
*   different interface 
###Composite (composite/leaf, recursive composition)
*   compose objects into tree structures to represent whole-part hierarchies. 
*   composite lets clients treat individual objects and compositions of objects uniformly
*   treat primitive and composite objects same
*   part-whole hierarchies as object
*   client use component class interface
*   composite implements component interface
*   nearly every user interface toolkit or framework uses a composite (from original Smalltalk MVC view implementation)
###Flyweight (sharing expensive resources)
*   use sharing to support large numbers of fine-grained objects efficiently
*   share what is common (intrinsic)
*   extrinsic

##BEHAVIORAL (decompositional, external to structure, sernder/receiver)
###Observer 
*   one to many
*   observer is registered
*   view example
*   query for subject state
*   pull
###Mediator 
*   encapsulates communication between multiple objects
###Strategy (interchangeable algorithms)
*   change guts
*   code to an interface (different algorithm implementation?)
*   key is to design interfaces for strategy and its context
###Command 
*   invoker/receiver paradigm
*   execute command on receiver
###Chain (multiple handlers for request/next)
###Iterator (access aggregate object without internals)
###Memento 
*   bookmark
*   capture objects internal state/for restoring state
*   snapshot
###State 
*   in a context
*   finite numbet of states
*   change behaviour depending on state
*   extract state into different classes
*   order of state change
*   transition to state
###Template Method (algorithm skeleton in a base class)
###Visitor (define new operation without changing classes/recursive structure)
###Interpreter


#MY EXPLANATIONS

##Creational
##A class creational pattern uses inheritance to vary the class that's instantiated, whereas an object creational pattern will delegate instantiation to another object.
###Abstract Factory
*   Create objects at run-time
*   Expose abstract method factory name (to client) 
*   Encapsulate creation process (hidden from client)
*   Required subclassing
*   Client is calling subclass (which encapsulate instantiation of objects)
###Factory method
*   Similar to abstract factory 
*   Subclass has more freedom (what to instantiate)
*   Choice is given to client
###Builder
*   Build object in steps
*   Director and builder
*   Builder is calling dependente object (what to build)
*   Director is calling builder
*   Client is calling director
###Singleton
*   Only one instance 
*   Global access (static)

##Structural(structural patterns are concerned with how classes and objects are composed to form larger structures)
##structural class patterns use inheritance to compose interfaces or implementations.
##structural object patterns describe ways to compose objects to realize new functionality
###Adapter
*   True wrapper example (encapsulation)
*   Wrapper for dependency object
*   Client calls wrapper methods which forwards to adapted code
*   Not transparent to client

#TOP LEVEL PATTERNS CLASIFICATION
##By purpose (what pattern does)
*   Creational (class,object)
*   Structural (class,object)
*   Behavioral (class,object)
##By scope (to classes or objects)
*   class scope (static, inheritance)
*   object scope (dynamic,run-time)

*   identify (less obvious) abstractions
*   object granularity (size)
*   run time (dynamic binding)

##Classification
    -class based (relies on inheritance distribution) 
    -object based (relies on composition distribution)

