.. include:: ../../../../Includes.txt

.. _singleView.128029197:
.. role:: red

===========
Single view
===========


.. _singleView.128029197.128029197:

View ``Default``
================

This view contains the following configuration.


Selected Fields
---------------

.. _singleView.128029197.128029197.217895432.tx_savlibraryexample5.title:

.. card::
   :class: mb-md-2

  :Field: title

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _singleView.128029197.128029197.217895432.tx_savlibraryexample5.hook_content:

.. card::
   :class: mb-md-2

  :Field: hook_content

  :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`

  :Configuration:

  ::

    - hookname = SavLibraryExample5
    - hookparameters = {
       "template": "Test.html",
       "uid": "###uidMainTable###"
     }