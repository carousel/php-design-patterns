#DESIGN PATTERNS

##CREATIONAL
###Abstract Factory
*   Provide an interface for creating families of related or dependent objects without specifying their concrete classes
###Factory Method 
*   Define an interface for creating an object, but let subclasses decide which class to instantiate
###Builder    
*   Separate the construction of a complex object from its representation so that the same construction process can create different representations
###Singleton 
*   Ensure a class has only one instance, and provide a global point of access to it
###Prototype (__clone to other slot of memory,delegation)

##STRUCTURAL(compositional, logic internal to the structure, wrappers)
###Adapter 
*   convert interface into one that clients expect (for one or many objects)
*   different interface from wrapped class(derived)
*   exposes only releveant methods to client
###Decorator 
*   Attach additional responsibilities to an object dynamically
*   smart proxy
*   wrapped in constructor
*   inheritance is not feasible because it is static and applies to an entire class
*   decorate object at run-time,
*   more flexible then inheritance
*   same interface as wrapped class
*   alternative to subclassing
*   must be a subclass of wrapped interface/object
###Bridge 
*   decouple an abstraction from its implementation so that the two can vary independently
*   more complex variation of adapter
*   run-time binding of the implementation
*   makes things work before design
*   common interface
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
*   compose objects into tree structures to represent whole-part hierarchies. Composite lets clients treat individual objects and compositions of objects uniformly
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
*   code to an interface (different algorithm implementation?)
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
###Abstract Factory
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

##Structural
###Adapter
*   True wrapper example (encapsulation)
*   Wrapper for dependency object
*   Client calls wrapper methods which forwards to adapted code
