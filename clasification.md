#DESIGN PATTERNS NOTES
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
* identify (less obvious) abstractions
* object granularity (size)
* run time (dynamic binding)


#TOP LEVEL PATTERNS CLASIFICATION
##By purpose (what pattern does)
*   Creational (class,object)
*   Structural (class,object)
*   Behavioral (class,object)
##By scope (to classes or objects)
*   class scope (inheritance,static)
*   object scope (composition,dynamic,run-time)


#THREE KIND OF SOFTWARE 
##Application programs (internal reuse)
##Toolkits (like subroutine libraries, write the code/call toolkit)
##Frameworks (design reuse over code reuse,reuse the framework/call the code,inversion of control)






##CREATIONAL (Creational patterns become important as systems evolve to depend more on object composition than class inheritance)
##A class creational pattern uses inheritance to vary the class that's instantiated, whereas an object creational pattern will delegate instantiation to another object.
###Abstract Factory
*   Provide an interface for creating families of related or dependent objects without specifying their concrete classes
*   Clients manipulate instances through their abstract interfaces
*   Participants (Abstract/ConcreteFactory, Abstract/ConcreteProduct,Client)
*   the difference is that the intended purpose of the class containing a factory method is not to create objects, while an abstract factory should only be used to create objects.
*   Create objects at run-time
*   Expose abstract method factory name (to client) 
*   Encapsulate creation process (hidden from client)
*   Required subclassing
*   Client is calling subclass (which encapsulate instantiation of objects)
###Factory method
*   the difference is that the intended purpose of the class containing a factory method is not to create objects, while an abstract factory should only be used to create objects.
*   Define an interface for creating an object, but let subclasses decide which class to instantiate
*   Participants (ProductInterface/ConcreteProduct, Abstract/ConcreteProduct,Client)
*   Similar to abstract factory 
*   Subclass has more freedom (what to instantiate)
*   Choice is given to client
###Builder
*   Separate the construction of a complex object from its representation so that the same construction process can create different representations
*   Build object in steps
*   Director and builder
*   Builder is calling dependente object (what to build)
*   Director is calling builder
*   Client is calling director
###Singleton
*   Ensure a class has only one instance, and provide a global point of access to it
###Prototype 
*   __clone to other slot of memory,delegation

##STRUCTURAL(compositional, logic internal to the structure, wrappers)
###Adapter (known as wrapper)
*   convert interface into one that clients expect (for one or many objects)
*   different interface from wrapped class(derived)
*   exposes only releveant methods to client
*   Participants (Adapter,Adaptee,Target,Client)
*   make things work after they are designed
*   True wrapper example (encapsulation)
*   Wrapper for dependency object
*   Client calls wrapper methods which forwards to adapted code
*   Not transparent to client
###Decorator (known as wrapper) 
*   recursive composition
*   open ended number of objects
*   change skin
*   focus embellishment
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
*   decouple an abstraction from its implementation so that the two can vary independently (orthogonal)
*   allow layering
*   abstraction and implementation can be extended differently
*   more complex variation of adapter
*   run-time binding of the implementation
*   makes things work before design
*   common interface for implementation
*   make things work after they are designed
###Proxy 
*   only one relationship (static?)
*   provide a surrogate or placeholder for another object to control access to it
*   limit access
*   surrogate for another object/
*   same interface as wrapped class
*   wrapped may not exist
*   no object in constructor
###Facade 
*   provide a unified interface to a set of interfaces in a subsystem. Facade defines a higher-level interface that makes the subsystem easier to use
*   higher level interface (for one or many objects)
*   different interface,new interface
*   unidirectional protocol
###Composite (composite/leaf)
*   recursive composition
*   open ended number of objects
*   representation
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
*   Flyweight context

##BEHAVIORAL (decompositional, external to structure, sender/receiver,find what varies and encapsulate it)
###Chain of responsibility(multiple handlers for request/next)
*   avoid coupling the sender of a request to receiver by giving more then one object change to handle request
*   pass the object along the chain
*   successor reference
*   open ended number of objects
###Command 
*   encapsulate request as object (known as action/transaction)
*   request is object
*   client sets receiver and insantiate command 
*   absrtact command class which encapsulates interface for executing operations
*   attach command to invoker
*   invoker issues request by calling execute method
*   commands are OO replacement for callbacks
*   command is implementation of interface
*   invoker/receiver paradigm
*   execute command on receiver
*   undo operation (reverse)
###Iterator (known as cursor)
*   access aggregate object sequentially without exposing internals
*   iterator and data structure are coupled
###Mediator 
*   encapsulates communication between multiple objects
*   avoid system looks like monolithic
*   controlling and coordinating the interactions of a group of objects
*   indirect communication
*   lozalized behavior
*   replaces many-to-many with one-to-many
*   mediator encapsulate protocols
###Memento (known as token)
*   bookmark
*   capture and record objects internal state/for restoring state
*   snapshot
*   memento and originator are tightly coupled
###Observer (known as publish/subscribe)
*   define one to many dependency
*   subject and observer (arent tightly coupled together)
*   MVC as example(view is observer, model is subject)
*   query for subject state
*   push/pull
###State 
*   in a context
*   transition from state to state (defined by context)
*   context delegates state specific request to concrete state class
*   The State pattern puts each branch of the conditional in a separate class.
*   context is primary interface for client
*   delegation (context to state)
*   finite numbet of states
*   change behaviour depending on state
*   extract state into different classes
*   order of state change
*   transition to state
*   vs strategy
###Strategy (known as policy)
*   delegation?
*   vs state
*   interchangeable algorithms
*   many related classes differ only in their behavior
*   change guts
*   code to an interface (different algorithm implementation?)
*   key is to design interfaces for strategy and its context
###Template Method (algorithm skeleton in a base class)
*   implement invariant part of algorithm
*   localize common behavior
*   fundamental method for code reuse
*   used in frameworks
*   "the Hollywood principle," that is, "Don't call us, we'll call you"
###Visitor (define new operation without changing classes/recursive structure)
*   operation on elements of structure
*   "accepts" the visitor
*   makes adding new operations easy
*   gathers related operatons and separates unrelated
*   is elements class hierarchy stable?
*   double dispatch (depends on two elements, request and receiver)
###Interpreter


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


#UML
*   dependency
*   association (related,not dependent)
*   aggregation/composition (has)
*   inheritance
